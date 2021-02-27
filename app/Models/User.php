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
     * Add new service.
     *
     * @var float
     */
    public function addPlanService($data)
    {
        // new service
        $service = new Service();
        $service->user_id = $this->id;
        $service->price = $this->getPlan($data['plan'])['price'];
        $service->status = Service::STATUS_NEW;
        $service->type = Service::TYPE_PLAN;

        $service->updateMetadata($data);
    }

    /**
     * Add new service.
     *
     * @var float
     */
    public function addTemplateService($data)
    {
        // new service
        $service = new Service();
        $service->user_id = $this->id;
        $service->price = $this->getTemplate($data['template'])['price'];
        $service->status = Service::STATUS_NEW;
        $service->type = Service::TYPE_TEMPLATE;

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

    /**
     * Check if user has plan service.
     *
     * @var float
     */
    public function hasPlanService()
    {
        return $this->services()
            ->where('type', '=', Service::TYPE_PLAN)->count();
    }

    /**
     * Check if user has template service.
     *
     * @var float
     */
    public function hasTemplateService()
    {
        return $this->services()
            ->where('type', '=', Service::TYPE_TEMPLATE)->count();
    }

    /**
     * Get plans.
     *
     * @var float
     */
    public function getPlans()
    {
        return [
            [
                'name' => 'basic',
                'title' => 'CƠ BẢN',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 380000,
                'button' => 'primary',
                'features' => [
                    'website' => 1,
                    'template' => 1,
                    'store' => 1,
                    'ecommerce_connect' => 1,                
                    'shipping' => 0,
                    'payment' => 0,
                ]
            ],
            [
                'name' => 'general',
                'title' => 'PHỔ BIẾN',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 520000,
                'button' => 'danger',
                'features' => [
                    'website' => 1,
                    'template' => 2,
                    'store' => 3,
                    'ecommerce_connect' => 3,                
                    'shipping' => 1,
                    'payment' => 0,
                    'emails' => '1,000',
                ]
            ],
            [
                'name' => 'advanced',
                'title' => 'NÂNG CAO',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 1020000,
                'button' => 'info',
                'features' => [
                    'website' => 2,
                    'template' => 3,
                    'store' => 5,
                    'ecommerce_connect' => '∞',                
                    'shipping' => '∞',
                    'payment' => '∞',
                    'emails' => '10,000',
                ]
            ],
            [
                'name' => 'professional',
                'title' => 'CHUYÊN NGHIỆP',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 2500000,
                'button' => 'warning',
                'features' => [
                    'website' => '∞',
                    'template' => 5,
                    'store' => '∞',
                    'ecommerce_connect' => '∞',                
                    'shipping' => '∞',
                    'payment' => '∞',
                    'emails' => '100,000',
                ]
            ],
        ];
    }

    /**
     * Get templates.
     *
     * @var float
     */
    public function getTemplates()
    {
        return [
            [
                'name' => 'template_1',
                'title' => 'CĂN BẢN 1',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 0,
                'button' => 'primary',
                'photo' => 'giao-dien-1.jpg',
            ],
            [
                'name' => 'template_2',
                'title' => 'CĂN BẢN 2',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 0,
                'button' => 'danger',
                'photo' => 'giao-dien-2.jpg',
            ],
            [
                'name' => 'template_3',
                'title' => 'NÂNG CAO 1',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 1000000,
                'button' => 'warning',
                'photo' => 'giao-dien-3.jpg',
            ],
            [
                'name' => 'template_4',
                'title' => 'NÂNG CAO 2',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 1000000,
                'button' => 'warning',
                'photo' => 'giao-dien-4.jpg',
            ],
            [
                'name' => 'template_5',
                'title' => 'NÂNG CAO 3',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 1000000,
                'button' => 'warning',
                'photo' => 'giao-dien-5.jpg',
            ],
            [
                'name' => 'template_6',
                'title' => 'NÂNG CAO 4',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 1000000,
                'button' => 'warning',
                'photo' => 'giao-dien-5.jpg',
            ],
        ];
    }

    /**
     * Get plan.
     *
     * @var float
     */
    public function getPlan($name)
    {
        foreach ($this->getPlans() as $plan) {
            if ($plan['name'] == $name) {
                return $plan;
            }
        }
    }

    /**
     * Get template.
     *
     * @var float
     */
    public function getTemplate($name)
    {
        foreach ($this->getTemplates() as $template) {
            if ($template['name'] == $name) {
                return $template;
            }
        }
    }
}
