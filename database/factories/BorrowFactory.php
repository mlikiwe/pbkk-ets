<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'borrow_date' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(7),
            'member_id' => Member::inRandomOrder()->first()->id,
            'book_id' => Book::inRandomOrder()->first()->id,
            'status' => 'belum',
        ];
    }
}
