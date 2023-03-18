<?php

namespace Database\Factories\Products;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // ディレクトリがなければ作成
        if (!Storage::exists('public/images')) {
            // 画像の保存先は 'storage/app/public/images' になります。
            Storage::makeDirectory('public/images');
        }

        return [
            //ダミーデータ作成
            'name' => $this->faker->image(storage_path('app/public/images'), 640, 480, null, false)
        ];
    }
}
