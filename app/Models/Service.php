<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Service extends Model
{
    const STATUS_NEW = 'new';
    const STATUS_PENDING = 'pending';

    const TYPE_DOMAIN = 'domain';
    const TYPE_PLAN = 'plan';
    const TYPE_TEMPLATE = 'template';

    /**
     * Get data.
     *
     * @var object | collect
     */
    public function getMetadata()
    {
        if (!$this['metadata']) {
            return json_decode('{}', true);
        }

        return json_decode($this['metadata'], true);
    }

    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Update data.
     *
     * @var object | collect
     */
    public function updateMetadata($data)
    {
        $data = (object) array_merge((array) $this->getMetadata(), $data);
        $this['metadata'] = json_encode($data);

        $this->save();
    }

    /**
     * Get name.
     *
     * @var object | collect
     */
    public function getName()
    {
        switch ($this->type) {
            case 'domain':
                $name = "Đăng ký tên miền: <strong>" . $this->getMetadata()['domain'] . "</strong>";
                break;
            case 'plan':
                $name = "Gói dịch vụ kinh doanh: <strong>" .
                    $this->user->getPlan($this->getMetadata()['plan'])['title'] . "</strong>";
                break;
            case 'template':
                $name = "Giao diện mặc định cho website: <strong>" .
                    $this->user->getTemplate($this->getMetadata()['template'])['title'] . "</strong>";
                break;
            default:
                $name = "N/A";
        }

        return $name;
    }

    /**
     * Get unit.
     *
     * @var object | collect
     */
    public function getUnit()
    {
        switch ($this->type) {
            case 'domain':
                $unit = " 1 năm";
                break;
            case 'plan':
                $unit = " 1 tháng";
                break;
            case 'template':
                $unit = " __ ";
                break;
            default:
                $unit = "N/A";
        }

        return $unit;
    }

}
