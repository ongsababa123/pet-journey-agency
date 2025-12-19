<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceHeaderModel;

class Sitemap extends BaseController
{
    public function index()
    {
        // load model to get service pages
        $model = new ServiceHeaderModel();
        $services = $model->where('status', 1)->findAll();

        $base = rtrim(base_url(), '/');

        $urls = [];

        // Add homepages and static pages (Thai + English)
        $urls[] = ['loc' => $base . '/', 'changefreq' => 'daily', 'priority' => '1.0'];
        $urls[] = ['loc' => $base . '/th/homepage', 'changefreq' => 'daily', 'priority' => '0.9'];
        $urls[] = ['loc' => $base . '/en/homepage', 'changefreq' => 'daily', 'priority' => '0.9'];
        $urls[] = ['loc' => $base . '/th/aboutuspage', 'changefreq' => 'monthly', 'priority' => '0.7'];
        $urls[] = ['loc' => $base . '/en/aboutuspage', 'changefreq' => 'monthly', 'priority' => '0.7'];
        $urls[] = ['loc' => $base . '/th/contactpage', 'changefreq' => 'monthly', 'priority' => '0.6'];
        $urls[] = ['loc' => $base . '/en/contactpage', 'changefreq' => 'monthly', 'priority' => '0.6'];
        $urls[] = ['loc' => $base . '/th/reviewpage', 'changefreq' => 'weekly', 'priority' => '0.6'];
        $urls[] = ['loc' => $base . '/en/reviewpage', 'changefreq' => 'weekly', 'priority' => '0.6'];

        // Add service pages from DB
        foreach ($services as $s) {
            $id = $s['id_service_header'];
            // if id == 1, route uses buysale segment
            if ((int)$id === 1) {
                $urls[] = ['loc' => $base . '/th/servicepage/buysale/' . $id, 'changefreq' => 'weekly', 'priority' => '0.8'];
                $urls[] = ['loc' => $base . '/en/servicepage/buysale/' . $id, 'changefreq' => 'weekly', 'priority' => '0.8'];
            } else {
                $urls[] = ['loc' => $base . '/th/servicepage/' . $id, 'changefreq' => 'weekly', 'priority' => '0.8'];
                $urls[] = ['loc' => $base . '/en/servicepage/' . $id, 'changefreq' => 'weekly', 'priority' => '0.8'];
            }
        }

        // Build XML
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset></urlset>');
        $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($urls as $u) {
            $url = $xml->addChild('url');
            $url->addChild('loc', esc($u['loc']));
            if (!empty($u['changefreq'])) $url->addChild('changefreq', $u['changefreq']);
            if (!empty($u['priority'])) $url->addChild('priority', $u['priority']);
        }

        // send XML
        return $this->response->setHeader('Content-Type', 'application/xml; charset=utf-8')->setBody($xml->asXML());
    }
}
