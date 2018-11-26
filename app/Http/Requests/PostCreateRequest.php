<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'category' => 'required',
            'content_html' => 'required',
            'publish_date' => 'required',
            'publish_time' => 'required',
            'layout' => 'required',
        ];
    }

    /**
     * Return the fields and values to create a new post from
     */
    public function postFillData()
    {
        $published_at = new Carbon(
            $this->publish_date.' '.$this->publish_time
        );
        return [
            'title' => $this->title,
            'slug'  => $this->title,
            'subtitle' => $this->subtitle,
            'category' => $this->category,
            'page_image' => $this->page_image,
            'content_raw' => $this->get('content_html'),
            'content_html' => $this->content_html,
            'meta_description' => $this->meta_description,
            'is_draft' => (bool)$this->is_draft,
            'published_at' => $published_at,
            'layout' => $this->layout,
        ];
    }
}
