<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class AboutCompany extends Component
{
    /**
     * Create a new component instance.
     */
    protected $aboimagen;
    protected $aboheader;
    protected $abobody;
    public function __construct()
    {
        $this->aboimagen = CmsSection::where('component_id', 'nosotros_imagen_seccion_7')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();
            
        $this->aboheader = CmsSection::where('component_id', 'about_header_section_8')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();
            
        $this->abobody = CmsSection::where('component_id', 'about_body_section_9')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-company', [
            'aboimagen' => $this->aboimagen,
            'aboheader' => $this->aboheader,
            'abobody' => $this->abobody,
        ]);
    }
}
