<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class CategoryTabs extends Component
{
    public Collection $categories;

    /**
     * Create a new component instance.
     */
    public function __construct(Collection $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-tabs', [
            'categories' => $this->categories,
        ]);
    }
}
