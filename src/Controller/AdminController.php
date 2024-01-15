<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin-dashboard", name="admin_dashboard")
     */
    public function adminDashboard(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Your logic for the admin dashboard here

        return $this->render('admin/dashboard.html.twig');
    }

    // ... other actions in your AdminController
}
