<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $authorId = Author::pluck('author_id')->random();
        $author = Author::find($authorId);
        // setto la data in modo che non sia possibile che un
        //libro sia pubblicato prima della nascita (qui del compimento 
        // dei 12 anni) dell' autore
        $minDate = $author->date_of_birth->addyears(12)->year;
        $maxDate = (int)now()->year;
        return [
            //sentence ha valori di default 6 e true.
            'title' => fake()->sentence($nbWords = 5, $variableNbWords = true),
            'author_id' => $authorId,
            // 'author_id' => Author::get()->random()->id, //metodo alternativo
            'year' => (int) fake()->numberBetween($minDate, $maxDate),            
            'category_id' => Category::pluck('category_id')->random(),
        ];



    }
}
