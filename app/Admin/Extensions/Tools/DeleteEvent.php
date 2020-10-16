<?php

namespace App\Admin\Extensions\Tools;

use App\Models\EventsOnefourfive;
use Dcat\Admin\Grid\BatchAction;
use Illuminate\Http\Request;

class DeleteEvent extends BatchAction
{
    protected $title = '删除';

    public function handle(Request $request)
    {
        // 获取选中的值
        $keys = $this->getKey();

        foreach (EventsOnefourfive::find($keys) as $note)
        {
            $note->delete();
        }

        return $this->response()->success('删除成功')->refresh();
    }

    public function confirm()
    {
        return "确认删除？";
    }

}