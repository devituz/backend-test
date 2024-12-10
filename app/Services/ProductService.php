<?php
namespace App\Services;

use App\Models\Product;

class ProductService extends BaseService
{
    public function getProdcuts()
    {
        $products = Product::with('materials.warehouses')->get();

        if ($products->isEmpty()) {
            return $this->errorResponse();
        }

        $result = $products->map(function ($product) {
            $productMaterials = $product->materials->map(function ($material) {
                $remainingQuantity = $material->quantity;
                $productMaterialDetails = [];

                foreach ($material->warehouses as $warehouse) {
                    if ($remainingQuantity <= 0) break;

                    $allocatedQty = min($remainingQuantity, $warehouse->quantity);
                    $remainingQuantity -= $allocatedQty;

                    $productMaterialDetails[] = [
                        'warehouse_id' => $warehouse->id,
                        'material_name' => $material->name,
                        'qty' => $allocatedQty,
                        'price' => $warehouse->price,
                    ];
                }

                if ($remainingQuantity > 0) {
                    $productMaterialDetails[] = [
                        'warehouse_id' => null,
                        'material_name' => $material->name,
                        'qty' => $remainingQuantity,
                        'price' => null,
                    ];
                }

                return $productMaterialDetails;
            });

            return [
                'product_name' => $product->name,
                'product_qty' => $product->quantity,
                'product_materials' => $productMaterials,
            ];
        });

        return $this->successResponse($result);
    }
}
