<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\models\Service;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'google_avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get user services.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get domain price by name.
     *
     * @var float
     */
    public function getDomainPrice($domain)
    {
        $subfix = explode('.', $domain)[count(explode('.', $domain)) - 1];
        
        $prices = [
            'com' => 400000,
        ];

        if (isset($prices[$subfix])) {
            return $prices[$subfix];
        } else {
            return 800000;
        }
    }

    /**
     * Add new service.
     *
     * @var float
     */
    public function addDomainService($data)
    {
        // new service
        $service = new Service();
        $service->user_id = $this->id;
        $service->price = $data['type'] == 'exist' ? 0 : $this->getDomainPrice($data['domain']);
        $service->status = Service::STATUS_NEW;
        $service->type = Service::TYPE_DOMAIN;

        $service->updateMetadata($data);
    }

    /**
     * Check if user has domain service.
     *
     * @var float
     */
    public function hasDomainService()
    {
        return $this->services()
            ->where('type', '=', Service::TYPE_DOMAIN)->count();
    }
}
