<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setContentWidth(Crud::CONTENT_WIDTH_FULL)
//            ->setContentWidth(Crud::CONTENT_WIDTH_NORMAL)
            ->setSidebarWidth(Crud::SIDEBAR_WIDTH_COMPACT)
//            ->setSidebarWidth(Crud::SIDEBAR_WIDTH_NORMAL)
            ->setTitle('Easy Ad Test');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Posts', 'fa fa-clipboard', Post::class);
    }
}
