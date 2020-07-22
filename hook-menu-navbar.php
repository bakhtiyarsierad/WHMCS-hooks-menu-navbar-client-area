<?php

#alamat hook cehat seet https://docs.whmcs.com/Client_Area_Navigation_Menus_Cheatsheet
#testTambahan

#adding Menu Item to primaryNavbar
use WHMCS\View\Menu\Item as MenuItem;
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    $primaryNavbar->addChild('Panduan')
        ->setUri('https://kb.hosterbyte.com/')
        ->setIcon('fa fa-book')
        ->setOrder(70);
        
    $primaryNavbar->addChild('Support WA')
        ->setUri('https://wa.me/6281336445429')
        ->setIcon('fab fa-whatsapp')
        ->setOrder(71);
		

});

#Disable menu di navbar
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Knowledgebase'))) {
        $primaryNavbar->removeChild('Knowledgebase');
    
    }
});
#Disable menu di navbar
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Support'))) {
        $primaryNavbar->getChild('Support')->removeChild('Knowledgebase');
    }
});

#hook mengunbah alamat yang ada
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    $navItem = $primaryNavbar->getChild('Support');
    if (is_null($navItem)) {
        return;
    }

    $navItem = $navItem->getChild('Knowledgebase');
    if (is_null($navItem)) {
        return;
    }

    $navItem->setUri('https://kb.hosterbyte.com');
   // $navItem->setLabel('!! Panduan');

});

#tambah sub menu
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Support'))) {
        $primaryNavbar->getChild('Support')
            ->addChild('Hubungi Kami Via Whatsapp', array(
                'label' => 'Hubungi Kami Via Whatsapp',
                'uri' => 'https://wa.me/6281336445429',
                'icon' => 'fab fa-whatsapp',
                'order' => '100',
            ));
    }
});
#tambah sub menu
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Domains'))) {
        $primaryNavbar->getChild('Domains')
            ->addChild('Int Domain Panel (Eksternal)', array(
                'label' => 'Int Domain Panel (Eksternal)',
                'uri' => 'https://hosterbyte.liqu.id/customer/',
                'icon' => 'fa fa-star',
                'order' => '20',
            ));
    }
});

#tambah sub menu
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Domains'))) {
        $primaryNavbar->getChild('Domains')
            ->addChild('.ID Domain Panel (Eksternal)', array(
                'label' => '.ID Domain Panel (Eksternal)',
                'uri' => 'https://hosterbyte.resellercamp.id/customer',
                'icon' => 'fa fa-star',
                'order' => '21',
            ));
    }
});



#Hook ICON di tiap menu navbar utama
add_hook('ClientAreaPrimaryNavbar', 1, function(MenuItem $primaryNavbar)
{
   if (!is_null($primaryNavbar->getChild('Home'))) {
             $primaryNavbar->getChild('Home')
                           ->setIcon('fa-home');
   }

   if (!is_null($primaryNavbar->getChild('Services'))) {
             $primaryNavbar->getChild('Services')
                           ->setIcon('fa-bars');
   }

   if (!is_null($primaryNavbar->getChild('Domains'))) {
             $primaryNavbar->getChild('Domains')
                           ->setIcon('fa-globe');
   }    

   if (!is_null($primaryNavbar->getChild('Billing'))) {
             $primaryNavbar->getChild('Billing')
                           ->setIcon('fa-credit-card');
   }    

   if (!is_null($primaryNavbar->getChild('Support'))) {
             $primaryNavbar->getChild('Support')
                           ->setIcon('fa-support');
   }    

    if (!is_null($primaryNavbar->getChild('Open Ticket'))) {
             $primaryNavbar->getChild('Open Ticket')
                           ->setIcon('fa-ticket');
   }  

if (!is_null($primaryNavbar->getChild('Announcements'))) {
             $primaryNavbar->getChild('Announcements')
                           ->setIcon('fa-newspaper-o');
   }  


if (!is_null($primaryNavbar->getChild('Contact Us'))) {
             $primaryNavbar->getChild('Contact Us')
                           ->setIcon('fa-phone');
   }

if (!is_null($primaryNavbar->getChild('Network Status'))) {
             $primaryNavbar->getChild('Network Status')
                           ->setIcon('fa-plug');
   } 

if (!is_null($primaryNavbar->getChild('Knowledgebase'))) {
             $primaryNavbar->getChild('Knowledgebase')
                           ->setIcon('fa-mortar-board');
   } 

});
