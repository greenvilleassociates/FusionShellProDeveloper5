<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3RM1lZaX5mxyQoH9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget-password.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget-password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset-password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/masssdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.mass-delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/masssupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.mass-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reviews/massdestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.review.massdelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reviews/massupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.review.massupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.groups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.groups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/shipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/transactions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GVkk8a2gLZtar5K5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/massaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.massaction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/massdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.massdelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/massupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.massupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.productlinksearch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/search-simple-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.search_simple_product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/massdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.massdelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/product/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.product.count',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/attributes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/attributes/massdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.massdelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/families/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currencies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currencies/massdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.massdelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exchange_rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exchange_rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exchange_rates/update-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.update_rates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inventory_sources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inventory_sources.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inventory_sources/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inventory_sources.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inventory_sources.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channels.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channels.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channels.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tax-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tax-categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tax-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tax-rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tax-rates/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.datagrid.export',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/cart-rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/cart-rules/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/massdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rule-coupons.mass-delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/catalog-rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog-rules.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/catalog-rules/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog-rules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog-rules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/campaigns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/campaigns/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/email-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email-templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/email-templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email-templates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email-templates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/events/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.events.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promotions/subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.subscribers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms/massdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.mass-delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ui-kit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PKTdJoBHKdOlMD0F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/helper-classess' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ui.helper.classes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.home.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.search.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upload-search-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.image.search.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.countries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.cart.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.cart.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/cart/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.cart.coupon.apply',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.coupon.remove.coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/onepage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.summary',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/save-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.save-address',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/save-shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.save-shipping',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/save-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.save-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/check-minimum-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.check-minimum-order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/save-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.save-order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.forgot-password.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.forgot-password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.reset-password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.session.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.register.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.register.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/customer/exist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.checkout.exist',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/customer/checkout/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.checkout.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.session.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/wishlist/removeall' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.wishlist.removeall',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.account.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.profile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.profile.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.address.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/addresses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.address.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.address.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.wishlist.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/downloadable-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.downloadable_products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/reviews/all-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.review.deleteall',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/smart-button/create-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.smart-button.create-order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/smart-button/capture-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.smart-button.capture-order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/switch-currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::THVqTlQLYnag3lVg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/switch-locale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HSBCeVP889gpC7ul',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ixtOBg8cdqJAfADu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/descendant-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eQaoI6EYIpebh760',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iqNU0MO22S1I2oBc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pfYn8mLGQkyYlh4k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lEYosNgbpD9FqyM4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTIqkkchg20PgU2s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/channels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TjdXNHuZTmfrPXoM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/locales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eGX9ytkTRiVdbQIJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n9IZeboSNoYuVsbQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/country-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w6TNo5LiMufzJHVr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NblKmaL7GHrnVse8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uzSXNTF01D7DCZKo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9uHuXO2whmhBHkOO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a70kwhh50NLRrZ9m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::StRzxB8TBWWSLVtB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fTDcAnybaY9FpHM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yZ0Y2XVp4760ax6x',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HLC1kuYhBQ4cVN8Y',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XfR7yzj2cFkPd4jW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YULbgfzjr9ESw0pU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZetYqiLUQT6ijmiu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KQSQ7C6D44CN9G4C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CvVZgraU3b5xXgkK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kchCzsAV9iDW2UjI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QKK7fdHXNyFqsRN3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IROg3S3osQpBpeHP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart/empty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y8KhyuALoc7Z1943',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EvnNJv2dIGoeLn0l',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p2OpKwM6IXTB5WLS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i08AAToGEgEEnjwm',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/save-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xTgKaJisFsDdD85C',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/save-shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMz2RmY0dW73foMP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/save-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hHf9JtQ5QuW6G9JO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/check-minimum-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1uCJ9jiFdIUW6oSC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/save-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ArN59bvIoJCFr08',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/velocity/content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/velocity/content/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/velocity/content/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/velocity/content/masssdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.mass-delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/velocity/meta-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.meta-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categorysearch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.search.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.categoriest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.category.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mini-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.cart.get.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.cart.add.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comparison' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.product.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.product.add.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'customer.product.delete.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/comparison' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.customer.product.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/items-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.product.item-count',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/detailed-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.product.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/(?|c(?|lockwork/([^/]++)(*:42)|ache/([^/]++)(?:/([^/]++))?(*:76))|telescope/([^/]++)(*:102))|/c(?|a(?|che/([^/]++)/([ \\w\\.\\/\\-\\@\\(\\)]+)(*:153)|rt/remove/([^/]++)(*:179)|tegory\\-products/([^/]++)(*:212))|heckout/cart/(?|add/([^/]++)(*:249)|remove/([^/]++)(*:272))|ustomer/(?|rese(?|t\\-password/([^/]++)(*:319)|nd/verification/([^/]++)(*:351))|verify\\-account/([^/]++)(*:384)|wishlist/(?|add/([^/]++)(*:416)|remove/([^/]++)(*:439)|move/([^/]++)(*:460))|account/(?|addresses/(?|edit/([^/]++)(?|(*:509))|de(?|fault/([^/]++)(*:537)|lete/([^/]++)(*:558)))|downloadable\\-products/download/([^/]++)(*:608)|orders/(?|view/([^/]++)(*:639)|print/([^/]++)(*:661)|cancel/([^/]++)(*:684))|reviews/delete/([^/]++)(*:716))|social\\-login/([^/]++)(?|(*:750)|/callback(*:767))))|/a(?|dmin/(?|r(?|e(?|set\\-password/([^/]++)(*:821)|views/(?|edit/([^/]++)(?|(*:854))|delete/([^/]++)(*:878)))|oles/(?|edit/([^/]++)(?|(*:912))|delete/([^/]++)(*:936)))|c(?|u(?|stomers/(?|edit/([^/]++)(?|(*:981))|note/([^/]++)(?|(*:1006))|delete/([^/]++)(*:1031)|([^/]++)/addresses(?|(*:1061)|/create(?|(*:1080)))|addresses/(?|edit/([^/]++)(?|(*:1120))|delete/([^/]++)(*:1145))|([^/]++)/(?|addresses(*:1176)|invoices(*:1193)|orders(*:1208)))|rrencies/(?|edit/([^/]++)(?|(*:1247))|delete/([^/]++)(*:1272)))|onfiguration(?|(?:/([^/]++)(?:/([^/]++))?)?(?|(*:1329))|/([^/]++)/([^/]++)/([^/]++)(*:1366))|atalog/(?|products/(?|copy/([^/]++)(*:1411)|edit/([^/]++)(?|(*:1436))|upload\\-(?|file/([^/]++)(*:1470)|sample/([^/]++)(*:1494))|delete/([^/]++)(*:1519)|([^/]++)/([^/]++)(*:1545))|categories/(?|edit/([^/]++)(?|(*:1585))|delete/([^/]++)(*:1610))|attributes/(?|edit/([^/]++)(?|(*:1650))|delete/([^/]++)(*:1675))|families/(?|edit/([^/]++)(?|(*:1713))|delete/([^/]++)(*:1738)))|hannels/(?|edit/([^/]++)(?|(*:1776))|delete/([^/]++)(*:1801))|ms/(?|edit/([^/]++)(?|(*:1833))|delete/([^/]++)(*:1858)))|groups/(?|edit/([^/]++)(?|(*:1895))|delete/([^/]++)(*:1920))|s(?|ales/(?|orders/(?|view/([^/]++)(*:1965)|c(?|ancel/([^/]++)(*:1992)|reate/([^/]++)(*:2015)))|invoices/(?|create/([^/]++)(?|(*:2056))|view/([^/]++)(*:2079)|print/([^/]++)(*:2102))|shipments/(?|create/([^/]++)(?|(*:2143))|view/([^/]++)(*:2166))|refunds/(?|create/([^/]++)(?|(*:2205))|update\\-qty/([^/]++)(*:2235)|view/([^/]++)(*:2257))|transactions/view/([^/]++)(*:2293))|lider/(?|edit/([^/]++)(?|(*:2328))|delete/([^/]++)(*:2353)))|users/(?|edit/([^/]++)(?|(*:2389))|delete/([^/]++)(*:2414)|confirm/([^/]++)(?|(*:2442)))|locales/(?|edit/([^/]++)(?|(*:2480))|delete/([^/]++)(*:2505))|exchange_rates/(?|edit/([^/]++)(?|(*:2549))|delete/([^/]++)(*:2574))|inventory_sources/(?|edit/([^/]++)(?|(*:2621))|delete/([^/]++)(*:2646))|tax\\-(?|categories/(?|edit/([^/]++)(?|(*:2694))|delete/([^/]++)(*:2719))|rates/(?|edit/([^/]++)(*:2751)|update/([^/]++)(*:2775)|delete/([^/]++)(*:2799)))|promotions/(?|ca(?|rt\\-rules/(?|copy/([^/]++)(*:2855)|edit/([^/]++)(?|(*:2880))|delete/([^/]++)(*:2905)|generate\\-coupons(?:/([^/]++))?(*:2945))|talog\\-rules/(?|edit/([^/]++)(?|(*:2987))|delete/([^/]++)(*:3012))|mpaigns/(?|edit/([^/]++)(?|(*:3049))|delete/([^/]++)(*:3074)))|e(?|mail\\-templates/(?|edit/([^/]++)(?|(*:3124))|delete/([^/]++)(*:3149))|vents/(?|edit/([^/]++)(?|(*:3184))|delete/([^/]++)(*:3209)))|subscribers/(?|delete/([^/]++)(*:3250)|edit/([^/]++)(*:3272)|update/([^/]++)(*:3296)))|velocity/(?|content/(?|edit/([^/]++)(?|(*:3346))|delete/([^/]++)(*:3371))|meta\\-data/([^/]++)(*:3400)))|pi/(?|c(?|ategories/([^/]++)(*:3439)|h(?|annels/([^/]++)(*:3467)|eckout/cart/(?|add/([^/]++)(*:3503)|remove\\-item/([^/]++)(*:3533)|move\\-to\\-wishlist/([^/]++)(*:3569)))|ountries/([^/]++)(*:3597)|u(?|rrencies/([^/]++)(*:3627)|stomers/([^/]++)(*:3652)))|a(?|ttributes/([^/]++)(*:3685)|ddresses/(?|([^/]++)(?|(*:3717))|create(*:3733)))|families/([^/]++)(*:3761)|product(?|s/([^/]++)(*:3790)|\\-(?|additional\\-information/([^/]++)(*:3836)|configurable\\-config/([^/]++)(*:3874)))|reviews/([^/]++)(?|(*:3904)|/create(*:3920)|(*:3929))|locales/([^/]++)(*:3955)|s(?|liders/([^/]++)(*:3983)|hipments/([^/]++)(*:4009))|orders/([^/]++)(*:4034)|invoices/([^/]++)(*:4060)|transactions/([^/]++)(*:4090)|wishlist/(?|([^/]++)(*:4119)|add/([^/]++)(*:4140))|move\\-to\\-cart/([^/]++)(*:4173)))|/unsubscribe/([^/]++)(*:4205)|/get/states/([^/]++)(*:4234)|/move/wishlist/([^/]++)(*:4266)|/downloadable/download\\-sample/([^/]++)/([^/]++)(*:4323)|/reviews/([^/]++)(*:4349)|/p(?|roduct(?|/([^/]++)/(?|review(?|(*:4394))|([^/]++)(*:4412))|\\-details/([^/]++)(*:4440))|age/([^/]++)(*:4462))|/fancy\\-category\\-details/([^/]++)(*:4506)|/booking\\-slots/([^/]++)(*:4539)|/(.*)(*:4553))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.telescope',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'imagecache',
          ),
          1 => 
          array (
            0 => 'template',
            1 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.cart.remove.product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.category.products',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.add',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.cart.remove',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.reset-password.create',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.resend.verification-email',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.wishlist.add',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.wishlist.remove',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.wishlist.move',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.address.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.address.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make.default.address',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.downloadable_products.download',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.orders.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.orders.print',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.orders.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.review.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.social-login.index',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.social-login.callback',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset-password.create',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.review.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.review.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.review.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.note.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.note.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.addresses.massdelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.invoices.data',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.orders.data',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configuration.index',
            'slug' => NULL,
            'slug2' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'slug2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configuration.index.store',
            'slug' => NULL,
            'slug2' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'slug2',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configuration.download',
            'slug' => NULL,
            'slug2' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'slug2',
            2 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.copy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.upload_link',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.upload_sample',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.file.download',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'attribute_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channels.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channels.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channels.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.groups.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.groups.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.groups.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.comment',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.store',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.print',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.store',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.store',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.update_qty',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'super.users.confirm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locales.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locales.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locales.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange_rates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inventory_sources.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inventory_sources.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inventory_sources.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-categories.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax-rates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.copy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cart-rules.generate-coupons',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog-rules.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog-rules.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog-rules.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email-templates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email-templates.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email-templates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.events.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.events.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.events.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.subscribers.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.subscribers.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.subscribers.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.content.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.admin.store.meta-data',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DPExPVBRpA0aacyG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DoH7EQM5uOjwgwHR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vVmCvBCGVMhDAVdU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l27ntN2IsKmrkwqV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0zKjNWpsPleI3cGP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2tIfWC5dF9iXbSUG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jEcJ6wwescpbeO6n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tkY4mhFlpQhkhkQg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CNcnh9uKpmYTZCgq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vIBRLgOiFAHI5Jem',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AsfX6zIcPPqULZQl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SEzVbw0NWkV3PglI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NexPgVIxrHgliTq0',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0XsJLWPIrq4YUco2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2YrKtwlT3B7Use9g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::adH0uSnaWVtSjWTa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ea5hGtueEiGe7CSb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bg6ofNzvl8o260LY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::svPh8d7vBcE2CgEo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T069ZsE2yBnxWD7H',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3955 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z8oxt1FGxMBrEJSb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AeHXW0l5BdZQnhRr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yA8KzY4ga0iIzHfY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1degTKCDARkbvDdZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I6R0zd9I9mq21f4n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EYOPnot1Rx8hl26T',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IOKfizNY4jXhlDnA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MLYidjMuwk5A8tuh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZAMcBp6yZYvgp61Z',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.unsubscribe',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.states',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.movetowishlist',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.downloadable.download_sample',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.reviews.index',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.reviews.create',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.reviews.store',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.product.file.download',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'attribute_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.shop.product',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.cms.page',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'velocity.fancy.category.details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking_product.slots.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.productOrCategory.index',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/telescope/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'as' => 'debugbar.telescope',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'imagecache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cache/{template}/{filename}',
      'action' => 
      array (
        'uses' => 'Intervention\\Image\\ImageCacheController@getResponse',
        'as' => 'imagecache',
        'controller' => 'Intervention\\Image\\ImageCacheController@getResponse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'filename' => '[ \\w\\.\\/\\-\\@\\(\\)]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3RM1lZaX5mxyQoH9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Controller@redirectToLogin',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Controller@redirectToLogin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3RM1lZaX5mxyQoH9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.session.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\SessionController@create',
        'controller' => 'Webkul\\User\\Http\\Controllers\\SessionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.sessions.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.session.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\SessionController@store',
        'controller' => 'Webkul\\User\\Http\\Controllers\\SessionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.dashboard.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forget-password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\ForgetPasswordController@create',
        'controller' => 'Webkul\\User\\Http\\Controllers\\ForgetPasswordController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forget-password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.forget-password.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forget-password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\ForgetPasswordController@store',
        'controller' => 'Webkul\\User\\Http\\Controllers\\ForgetPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forget-password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.reset-password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\ResetPasswordController@create',
        'controller' => 'Webkul\\User\\Http\\Controllers\\ResetPasswordController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.reset-password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.reset-password.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.reset-password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\ResetPasswordController@store',
        'controller' => 'Webkul\\User\\Http\\Controllers\\ResetPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.reset-password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.dashboard.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.session.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\SessionController@destroy',
        'controller' => 'Webkul\\User\\Http\\Controllers\\SessionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.session.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\DashboardController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::dashboard.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.note.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/note/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@createNote',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@createNote',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.note.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.note',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.note.store' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/note/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@storeNote',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@storeNote',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.note.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.mass-delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/masssdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@massDestroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.mass-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.mass-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/masssupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@massUpdate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@massUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.mass-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@index',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.review.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.reviews.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/{id}/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.addresses.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/{id}/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.addresses.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/{id}/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.addresses.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.addresses.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.addresses.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/addresses/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.addresses.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.addresses.massdelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/{id}/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\AddressController@massDestroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.addresses.massdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.addresses.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.invoices.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/{id}/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@invoices',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@invoices',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.invoices.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.orders.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/{id}/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@orders',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerController@orders',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.orders.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.orders.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.configuration.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/configuration/{slug?}/{slug2?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.configuration.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::configuration.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.configuration.index.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/configuration/{slug?}/{slug2?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.configuration.index.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.configuration.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.configuration.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/configuration/{slug?}/{slug2?}/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@download',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@download',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.configuration.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.configuration.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@edit',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.reviews.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@update',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.review.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.review.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reviews/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@destroy',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.review.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.review.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.review.massdelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reviews/massdestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@massDestroy',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@massDestroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.review.massdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.review.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customer.review.massupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reviews/massupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@massUpdate',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ReviewController@massUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.review.massupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customer.review.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.groups.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.groups.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.groups.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.groups.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.groups.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.groups.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.groups.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.groups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.groups.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.groups.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/groups/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.groups.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.groups.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.groups.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/groups/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customer\\CustomerGroupController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.groups.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.orders.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.orders.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/orders/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.orders.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.orders.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/orders/cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@cancel',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@cancel',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.orders.cancel',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.orders.comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/orders/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@comment',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@comment',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.comment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.invoices.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.invoices.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/invoices/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.sales.orders.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.invoices.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.invoices.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.invoices.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@print',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@print',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.print',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.invoices.print',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.shipments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/shipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.shipments.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.shipments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/shipments/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.shipments.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.shipments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/shipments/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.sales.orders.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.shipments.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/shipments/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.shipments.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.refunds.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.refunds.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.refunds.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/refunds/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.refunds.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.refunds.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/refunds/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.sales.orders.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.refunds.update_qty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/refunds/update-qty/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@updateQty',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@updateQty',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.update_qty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.sales.orders.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.refunds.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/refunds/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.refunds.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.transactions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.transactions.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.transactions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/transactions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.transactions.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.transactions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/transactions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sales.transactions.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/transactions/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::sales.transactions.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GVkk8a2gLZtar5K5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@sync',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@sync',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'generated::GVkk8a2gLZtar5K5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@index',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@create',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.products.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@store',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.products.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/copy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@copy',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@copy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.copy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.products.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@edit',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.products.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@update',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.upload_link' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/upload-file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@uploadLink',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@uploadLink',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.upload_link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.upload_sample' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/upload-sample/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@uploadSample',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@uploadSample',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.upload_sample',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.massaction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/massaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@massActionHandler',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@massActionHandler',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.massaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.massdelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/massdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@massDestroy',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.massdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.massupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/massupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@massUpdate',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.massupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.productlinksearch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@productLinkSearch',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@productLinkSearch',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.productlinksearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.products.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.search_simple_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/search-simple-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@searchSimpleProducts',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@searchSimpleProducts',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.search_simple_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.products.file.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/{id}/{attribute_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Product\\Http\\Controllers\\ProductController@download',
        'controller' => 'Webkul\\Product\\Http\\Controllers\\ProductController@download',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.file.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin.catalog.products.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@index',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@create',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.categories.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@store',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@edit',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.categories.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@update',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@destroy',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.massdelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/massdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@massDestroy',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.massdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.categories.product.count' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/product/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@categoryProductCount',
        'controller' => 'Webkul\\Category\\Http\\Controllers\\CategoryController@categoryProductCount',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.product.count',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@index',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.attributes.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@create',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.attributes.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@store',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.attributes.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@edit',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.attributes.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/attributes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@update',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.attributes.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/attributes/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@destroy',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.attributes.massdelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/attributes/massdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@massDestroy',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.massdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.families.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@index',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.families.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.families.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/families/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@create',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.families.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.families.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/families/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@store',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.families.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.families.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/families/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@edit',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::catalog.families.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.families.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/families/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@update',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog.families.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog.families.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/families/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@destroy',
        'controller' => 'Webkul\\Attribute\\Http\\Controllers\\AttributeFamilyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@index',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.users.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@create',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.users.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@store',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.users.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@edit',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.users.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@update',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.users.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'super.users.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/confirm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@confirm',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@confirm',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'super.users.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::customers.confirm-password',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/confirm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\UserController@destroySelf',
        'controller' => 'Webkul\\User\\Http\\Controllers\\UserController@destroySelf',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.users.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.users.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\RoleController@index',
        'controller' => 'Webkul\\User\\Http\\Controllers\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.roles.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\RoleController@create',
        'controller' => 'Webkul\\User\\Http\\Controllers\\RoleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.roles.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\RoleController@store',
        'controller' => 'Webkul\\User\\Http\\Controllers\\RoleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.roles.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\RoleController@edit',
        'controller' => 'Webkul\\User\\Http\\Controllers\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::users.roles.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\RoleController@update',
        'controller' => 'Webkul\\User\\Http\\Controllers\\RoleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.roles.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'Webkul\\User\\Http\\Controllers\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.locales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@index',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locales.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.locales.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.locales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@create',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locales.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.locales.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.locales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/locales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@store',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locales.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.locales.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.locales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locales/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@edit',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locales.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.locales.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.locales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/locales/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@update',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locales.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.locales.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.locales.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/locales/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@destroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\LocaleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locales.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@index',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.currencies.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@create',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.currencies.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@store',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.currencies.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@edit',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.currencies.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/currencies/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@update',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.currencies.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currencies/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@destroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.currencies.massdelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currencies/massdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@massDestroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CurrencyController@massDestroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currencies.massdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exchange_rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@index',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.exchange_rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exchange_rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@create',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.exchange_rates.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/exchange_rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@store',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.exchange_rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exchange_rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@edit',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.exchange_rates.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.update_rates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exchange_rates/update-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@updateRates',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@updateRates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.update_rates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/exchange_rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@update',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.exchange_rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.exchange_rates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/exchange_rates/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@destroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ExchangeRateController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.exchange_rates.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inventory_sources.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inventory_sources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@index',
        'controller' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inventory_sources.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.inventory_sources.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inventory_sources.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inventory_sources/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@create',
        'controller' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inventory_sources.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.inventory_sources.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inventory_sources.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inventory_sources/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@store',
        'controller' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inventory_sources.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.inventory_sources.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inventory_sources.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inventory_sources/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@edit',
        'controller' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inventory_sources.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.inventory_sources.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inventory_sources.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/inventory_sources/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@update',
        'controller' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inventory_sources.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.inventory_sources.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inventory_sources.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inventory_sources/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@destroy',
        'controller' => 'Webkul\\Inventory\\Http\\Controllers\\InventorySourceController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inventory_sources.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channels.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@index',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.channels.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.channels.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channels.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@create',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.channels.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.channels.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channels.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/channels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@store',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.channels.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.channels.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channels.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@edit',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.channels.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.channels.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channels.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/channels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@update',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.channels.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.channels.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channels.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/channels/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@destroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\ChannelController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.channels.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.account.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\AccountController@edit',
        'controller' => 'Webkul\\User\\Http\\Controllers\\AccountController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::account.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\User\\Http\\Controllers\\AccountController@update',
        'controller' => 'Webkul\\User\\Http\\Controllers\\AccountController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sliders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SliderController@index',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SliderController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sliders.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.sliders.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sliders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SliderController@create',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SliderController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sliders.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.sliders.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sliders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SliderController@store',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SliderController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sliders.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.sliders.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sliders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SliderController@edit',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sliders.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::settings.sliders.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sliders.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SliderController@update',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SliderController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sliders.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.sliders.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.sliders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SliderController@destroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sliders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxController@index',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::tax.tax-categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@show',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-categories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::tax.tax-categories.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tax-categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@create',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.tax-categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@edit',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::tax.tax-categories.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tax-categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@update',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.tax-categories.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tax-categories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@destroy',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-categories.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@index',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::tax.tax-rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@show',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::tax.tax-rates.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tax-rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@create',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.tax-rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tax-rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@edit',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::tax.tax-rates.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tax-rates/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@update',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.tax-rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tax-rates/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@destroy',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tax-rates.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tax-rates/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@import',
        'controller' => 'Webkul\\Tax\\Http\\Controllers\\TaxRateController@import',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tax-rates.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.tax-rates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.datagrid.export' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ExportController@export',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ExportController@export',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.datagrid.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/cart-rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@index',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.cart-rules.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/cart-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@create',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.cart-rules.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/cart-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@store',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.cart-rules.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/cart-rules/copy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@copy',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@copy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.copy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.cart-rules.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/cart-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@edit',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.cart-rules.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/cart-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@update',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.cart-rules.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/cart-rules/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@destroy',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rules.generate-coupons' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/cart-rules/generate-coupons/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@generateCoupons',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleController@generateCoupons',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rules.generate-coupons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cart-rule-coupons.mass-delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/massdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleCouponController@massDelete',
        'controller' => 'Webkul\\CartRule\\Http\\Controllers\\CartRuleCouponController@massDelete',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.cart-rule-coupons.mass-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog-rules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/catalog-rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@index',
        'controller' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog-rules.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.catalog-rules.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog-rules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/catalog-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@create',
        'controller' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog-rules.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.catalog-rules.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog-rules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/catalog-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@store',
        'controller' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog-rules.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog-rules.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog-rules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/catalog-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@edit',
        'controller' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog-rules.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.promotions.catalog-rules.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog-rules.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/catalog-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@update',
        'controller' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog-rules.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.catalog-rules.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalog-rules.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/catalog-rules/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@destroy',
        'controller' => 'Webkul\\CatalogRule\\Http\\Controllers\\CatalogRuleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog-rules.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.campaigns.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/campaigns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@index',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@index',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.campaigns.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.campaigns.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.campaigns.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/campaigns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@create',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@create',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.campaigns.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.campaigns.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.campaigns.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/campaigns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@store',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@store',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.campaigns.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.campaigns.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.campaigns.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/campaigns/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@edit',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.campaigns.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.campaigns.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.campaigns.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/campaigns/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@update',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@update',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.campaigns.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.campaigns.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.campaigns.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/campaigns/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@destroy',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\CampaignController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.campaigns.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email-templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/email-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@index',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.email-templates.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.templates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email-templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/email-templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@create',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@create',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.email-templates.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.templates.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email-templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/email-templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@store',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@store',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.email-templates.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.email-templates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email-templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/email-templates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@edit',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.email-templates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.templates.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email-templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/email-templates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@update',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@update',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.email-templates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.email-templates.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email-templates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/email-templates/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@destroy',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\TemplateController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.email-templates.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@index',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.events.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.events.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.events.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/events/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@create',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@create',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.events.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.events.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/events/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@store',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@store',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.events.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.events.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.events.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/events/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@edit',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.events.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.events.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.events.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/events/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@update',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@update',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.events.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.events.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.events.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/events/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@destroy',
        'controller' => 'Webkul\\Marketing\\Http\\Controllers\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.events.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customers.subscribers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@index',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.subscribers.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.subscribers.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customers.subscribers.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promotions/subscribers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@destroy',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.subscribers.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customers.subscribers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promotions/subscribers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@edit',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.subscribers.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::marketing.email-marketing.subscribers.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customers.subscribers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/promotions/subscribers/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@update',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => 'admin/promotions',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.subscribers.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.customers.subscribers.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@index',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::cms.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@create',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@create',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::cms.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@store',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@store',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.cms.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@edit',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin::cms.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@update',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@update',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.cms.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@delete',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.cms.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms.mass-delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms/massdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@massDelete',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Admin\\PageController@massDelete',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.mass-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.cms.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PKTdJoBHKdOlMD0F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ui-kit',
      'action' => 
      array (
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'generated::PKTdJoBHKdOlMD0F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'ui::partials.ui-kit',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ui.helper.classes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'helper-classess',
      'action' => 
      array (
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'ui.helper.classes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'ui::partials.helper-classes',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.home.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\HomeController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.home.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::home.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@subscribe',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@subscribe',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.unsubscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unsubscribe/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@unsubscribe',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@unsubscribe',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.unsubscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.search.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SearchController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SearchController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.search.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::search.search',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.image.search.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload-search-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\HomeController@upload',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\HomeController@upload',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.image.search.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CountryStateController@getCountries',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CountryStateController@getCountries',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.countries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::test',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get/states/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Core\\Http\\Controllers\\CountryStateController@getStates',
        'controller' => 'Webkul\\Core\\Http\\Controllers\\CountryStateController@getStates',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::test',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.cart.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.cart.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::checkout.cart.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.cart.coupon.apply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/cart/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@applyCoupon',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@applyCoupon',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.cart.coupon.apply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.coupon.remove.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'checkout/cart/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@removeCoupon',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@removeCoupon',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.coupon.remove.coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/cart/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@add',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@add',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'shop.checkout.cart.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.cart.remove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/cart/remove/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@remove',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@remove',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.cart.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'shop.checkout.cart.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.cart.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@updateBeforeCheckout',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@updateBeforeCheckout',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.cart.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'shop.checkout.cart.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.onepage.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/onepage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::checkout.onepage',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.summary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@summary',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@summary',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.summary',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.save-address' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/save-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@saveAddress',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@saveAddress',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.save-address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.save-shipping' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/save-shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@saveShipping',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@saveShipping',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.save-shipping',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.save-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/save-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@savePayment',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@savePayment',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.save-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.check-minimum-order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/check-minimum-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@checkMinimumOrder',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@checkMinimumOrder',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.check-minimum-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.save-order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/save-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@saveOrder',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@saveOrder',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.save-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.checkout.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@success',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@success',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::checkout.success',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.movetowishlist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'move/wishlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@moveToWishlist',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@moveToWishlist',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.movetowishlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.downloadable.download_sample' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'downloadable/download-sample/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@downloadSample',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@downloadSample',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.downloadable.download_sample',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reviews/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@show',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@show',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.reviews.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::products.reviews.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.reviews.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{slug}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@create',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.reviews.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::products.reviews.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.reviews.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/{slug}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.reviews.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'shop.home.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.product.file.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{id}/{attribute_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@download',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@download',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.product.file.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop.products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.forgot-password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\ForgotPasswordController@create',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\ForgotPasswordController@create',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.forgot-password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.signup.forgot-password',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.forgot-password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\ForgotPasswordController@store',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\ForgotPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.forgot-password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.reset-password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\ResetPasswordController@create',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\ResetPasswordController@create',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.reset-password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.signup.reset-password',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.reset-password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\ResetPasswordController@store',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\ResetPasswordController@store',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.reset-password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.session.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\SessionController@show',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\SessionController@show',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.session.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.session.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.session.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\SessionController@create',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\SessionController@create',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.session.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.register.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@show',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@show',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.register.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.signup.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.register.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@create',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@create',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.register.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.session.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/verify-account/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@verifyAccount',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@verifyAccount',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.resend.verification-email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/resend/verification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@resendVerificationEmail',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\RegistrationController@resendVerificationEmail',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.resend.verification-email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.checkout.exist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/customer/exist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@checkExistCustomer',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@checkExistCustomer',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.checkout.exist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.checkout.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/customer/checkout/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@loginForCheckout',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@loginForCheckout',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.checkout.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.session.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\SessionController@destroy',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\SessionController@destroy',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.session.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.session.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.wishlist.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/wishlist/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@add',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@add',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.wishlist.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.wishlist.remove' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/wishlist/remove/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@remove',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@remove',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.wishlist.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.wishlist.removeall' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/wishlist/removeall',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@removeAll',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@removeAll',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.wishlist.removeall',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.wishlist.move' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/wishlist/move/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@move',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@move',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.wishlist.move',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.account.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AccountController@index',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AccountController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.account.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@index',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.profile.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@edit',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.profile.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@update',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.profile.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/profile/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@destroy',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.profile.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.address.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@index',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.address.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.address.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.address.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@create',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@create',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.address.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.address.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.address.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@store',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.address.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.address.address',
          'redirect' => 'customer.address.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.address.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@edit',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.address.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.address.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.address.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/account/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@update',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.address.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.address.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'make.default.address' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@makeDefault',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@makeDefault',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'make.default.address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/account/addresses/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@destroy',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'address.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.wishlist.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@index',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\WishlistController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.wishlist.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.wishlist.wishlist',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.orders.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.orders.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.downloadable_products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/downloadable-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\DownloadableProductController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\DownloadableProductController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.downloadable_products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.downloadable_products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.downloadable_products.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/downloadable-products/download/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\DownloadableProductController@download',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\DownloadableProductController@download',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.downloadable_products.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.downloadable_products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.orders.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/orders/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@view',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@view',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.orders.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.orders.view',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.orders.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/orders/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@print',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@print',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.orders.print',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.orders.print',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.orders.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/orders/cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@cancel',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OrderController@cancel',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.orders.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@reviews',
        'controller' => 'Webkul\\Customer\\Http\\Controllers\\CustomerController@reviews',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.reviews.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.reviews.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.review.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/account/reviews/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.review.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.reviews.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.review.deleteall' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/account/reviews/all-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@deleteAll',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ReviewController@deleteAll',
        'namespace' => NULL,
        'prefix' => 'customer/account',
        'where' => 
        array (
        ),
        'as' => 'customer.review.deleteall',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.reviews.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.cms.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\CMS\\Http\\Controllers\\Shop\\PagePresenterController@presenter',
        'controller' => 'Webkul\\CMS\\Http\\Controllers\\Shop\\PagePresenterController@presenter',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.cms.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shop.productOrCategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ProductsCategoriesProxyController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ProductsCategoriesProxyController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shop.productOrCategory.index',
      ),
      'fallback' => true,
      'defaults' => 
      array (
        '_config' => 
        array (
          'product_view' => 'shop::products.view',
          'category_view' => 'shop::products.index',
        ),
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'paypal.standard.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/standard/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@redirect',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@redirect',
        'namespace' => NULL,
        'prefix' => '/paypal/standard',
        'where' => 
        array (
        ),
        'as' => 'paypal.standard.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'paypal.standard.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/standard/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@success',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@success',
        'namespace' => NULL,
        'prefix' => '/paypal/standard',
        'where' => 
        array (
        ),
        'as' => 'paypal.standard.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'paypal.standard.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/standard/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@cancel',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@cancel',
        'namespace' => NULL,
        'prefix' => '/paypal/standard',
        'where' => 
        array (
        ),
        'as' => 'paypal.standard.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'paypal.smart-button.create-order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/smart-button/create-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@createOrder',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@createOrder',
        'namespace' => NULL,
        'prefix' => '/paypal/smart-button',
        'where' => 
        array (
        ),
        'as' => 'paypal.smart-button.create-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'paypal.smart-button.capture-order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal/smart-button/capture-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@captureOrder',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@captureOrder',
        'namespace' => NULL,
        'prefix' => '/paypal/smart-button',
        'where' => 
        array (
        ),
        'as' => 'paypal.smart-button.capture-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'paypal.standard.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal/standard/ipn',
      'action' => 
      array (
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@ipn',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@ipn',
        'as' => 'paypal.standard.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::THVqTlQLYnag3lVg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/switch-currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@switchCurrency',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@switchCurrency',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::THVqTlQLYnag3lVg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HSBCeVP889gpC7ul' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/switch-locale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@switchLocale',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@switchLocale',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HSBCeVP889gpC7ul',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ixtOBg8cdqJAfADu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ixtOBg8cdqJAfADu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Category\\Repositories\\CategoryRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\Category',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eQaoI6EYIpebh760' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/descendant-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CategoryController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CategoryController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eQaoI6EYIpebh760',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DPExPVBRpA0aacyG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DPExPVBRpA0aacyG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Category\\Repositories\\CategoryRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\Category',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iqNU0MO22S1I2oBc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::iqNU0MO22S1I2oBc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Attribute\\Repositories\\AttributeRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\Attribute',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CNcnh9uKpmYTZCgq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/attributes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CNcnh9uKpmYTZCgq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Attribute\\Repositories\\AttributeRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\Attribute',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pfYn8mLGQkyYlh4k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pfYn8mLGQkyYlh4k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Attribute\\Repositories\\AttributeFamilyRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\AttributeFamily',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0XsJLWPIrq4YUco2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/families/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0XsJLWPIrq4YUco2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Attribute\\Repositories\\AttributeFamilyRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\AttributeFamily',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lEYosNgbpD9FqyM4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lEYosNgbpD9FqyM4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2YrKtwlT3B7Use9g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2YrKtwlT3B7Use9g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::adH0uSnaWVtSjWTa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product-additional-information/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@additionalInformation',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@additionalInformation',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::adH0uSnaWVtSjWTa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ea5hGtueEiGe7CSb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product-configurable-config/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@configurableConfig',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ProductController@configurableConfig',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ea5hGtueEiGe7CSb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LTIqkkchg20PgU2s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LTIqkkchg20PgU2s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Product\\Repositories\\ProductReviewRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\ProductReview',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Bg6ofNzvl8o260LY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Bg6ofNzvl8o260LY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Product\\Repositories\\ProductReviewRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\ProductReview',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::svPh8d7vBcE2CgEo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reviews/{id}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ReviewController@store',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ReviewController@store',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::svPh8d7vBcE2CgEo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T069ZsE2yBnxWD7H' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@destroy',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@destroy',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T069ZsE2yBnxWD7H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Product\\Repositories\\ProductReviewRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Catalog\\ProductReview',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TjdXNHuZTmfrPXoM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TjdXNHuZTmfrPXoM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\ChannelRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Channel',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DoH7EQM5uOjwgwHR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/channels/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DoH7EQM5uOjwgwHR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\ChannelRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Channel',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eGX9ytkTRiVdbQIJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/locales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eGX9ytkTRiVdbQIJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\LocaleRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Locale',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z8oxt1FGxMBrEJSb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/locales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z8oxt1FGxMBrEJSb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\LocaleRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Locale',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n9IZeboSNoYuVsbQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::n9IZeboSNoYuVsbQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\CountryRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Country',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2tIfWC5dF9iXbSUG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2tIfWC5dF9iXbSUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\CountryRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Country',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w6TNo5LiMufzJHVr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/country-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@getCountryStateGroup',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@getCountryStateGroup',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::w6TNo5LiMufzJHVr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NblKmaL7GHrnVse8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NblKmaL7GHrnVse8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\SliderRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Slider',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AeHXW0l5BdZQnhRr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sliders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AeHXW0l5BdZQnhRr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\SliderRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Slider',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uzSXNTF01D7DCZKo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uzSXNTF01D7DCZKo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\CurrencyRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Currency',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jEcJ6wwescpbeO6n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currencies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jEcJ6wwescpbeO6n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Core\\Repositories\\CurrencyRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Core\\Currency',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9uHuXO2whmhBHkOO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@getConfig',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CoreController@getConfig',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9uHuXO2whmhBHkOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a70kwhh50NLRrZ9m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@create',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@create',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::a70kwhh50NLRrZ9m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::StRzxB8TBWWSLVtB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ForgotPasswordController@store',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ForgotPasswordController@store',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::StRzxB8TBWWSLVtB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5fTDcAnybaY9FpHM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@destroy',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@destroy',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5fTDcAnybaY9FpHM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yZ0Y2XVp4760ax6x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yZ0Y2XVp4760ax6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HLC1kuYhBQ4cVN8Y' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/customer/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@update',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\SessionController@update',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HLC1kuYhBQ4cVN8Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XfR7yzj2cFkPd4jW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CustomerController@create',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CustomerController@create',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XfR7yzj2cFkPd4jW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tkY4mhFlpQhkhkQg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CustomerController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CustomerController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tkY4mhFlpQhkhkQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Customer\\Repositories\\CustomerRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Customer\\Customer',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YULbgfzjr9ESw0pU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\AddressController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\AddressController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YULbgfzjr9ESw0pU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vIBRLgOiFAHI5Jem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vIBRLgOiFAHI5Jem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Customer\\Repositories\\CustomerAddressRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Customer\\CustomerAddress',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AsfX6zIcPPqULZQl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/addresses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@destroy',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@destroy',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AsfX6zIcPPqULZQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Customer\\Repositories\\CustomerAddressRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Customer\\CustomerAddress',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SEzVbw0NWkV3PglI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/addresses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\AddressController@update',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\AddressController@update',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SEzVbw0NWkV3PglI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NexPgVIxrHgliTq0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\AddressController@store',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\AddressController@store',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NexPgVIxrHgliTq0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZetYqiLUQT6ijmiu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZetYqiLUQT6ijmiu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\OrderRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\Order',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1degTKCDARkbvDdZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1degTKCDARkbvDdZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\OrderRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\Order',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KQSQ7C6D44CN9G4C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\InvoiceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\InvoiceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KQSQ7C6D44CN9G4C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\InvoiceRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\Invoice',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I6R0zd9I9mq21f4n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\InvoiceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\InvoiceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::I6R0zd9I9mq21f4n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\InvoiceRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\Invoice',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CvVZgraU3b5xXgkK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CvVZgraU3b5xXgkK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\ShipmentRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\Shipment',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yA8KzY4ga0iIzHfY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yA8KzY4ga0iIzHfY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\ShipmentRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\Shipment',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kchCzsAV9iDW2UjI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\TransactionController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\TransactionController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kchCzsAV9iDW2UjI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\OrderTransactionRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\OrderTransaction',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EYOPnot1Rx8hl26T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transactions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\TransactionController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\TransactionController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EYOPnot1Rx8hl26T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Sales\\Repositories\\OrderTransactionRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Sales\\OrderTransaction',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QKK7fdHXNyFqsRN3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@index',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QKK7fdHXNyFqsRN3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Customer\\Repositories\\WishlistRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Customer\\Wishlist',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IOKfizNY4jXhlDnA' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/wishlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@destroy',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\ResourceController@destroy',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IOKfizNY4jXhlDnA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'repository' => 'Webkul\\Customer\\Repositories\\WishlistRepository',
          'resource' => 'Webkul\\API\\Http\\Resources\\Customer\\Wishlist',
          'authorization_required' => true,
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZAMcBp6yZYvgp61Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/move-to-cart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\WishlistController@moveToCart',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\WishlistController@moveToCart',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZAMcBp6yZYvgp61Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MLYidjMuwk5A8tuh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlist/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\WishlistController@create',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\WishlistController@create',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MLYidjMuwk5A8tuh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vVmCvBCGVMhDAVdU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/cart/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@store',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@store',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::vVmCvBCGVMhDAVdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IROg3S3osQpBpeHP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@get',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@get',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::IROg3S3osQpBpeHP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::y8KhyuALoc7Z1943' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/cart/empty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@destroy',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@destroy',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::y8KhyuALoc7Z1943',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EvnNJv2dIGoeLn0l' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/checkout/cart/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@update',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@update',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::EvnNJv2dIGoeLn0l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::l27ntN2IsKmrkwqV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/cart/remove-item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@destroyItem',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@destroyItem',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::l27ntN2IsKmrkwqV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p2OpKwM6IXTB5WLS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/cart/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@applyCoupon',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@applyCoupon',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::p2OpKwM6IXTB5WLS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i08AAToGEgEEnjwm' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/checkout/cart/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@removeCoupon',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@removeCoupon',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::i08AAToGEgEEnjwm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0zKjNWpsPleI3cGP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/cart/move-to-wishlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@moveToWishlist',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CartController@moveToWishlist',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::0zKjNWpsPleI3cGP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xTgKaJisFsDdD85C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/save-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@saveAddress',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@saveAddress',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::xTgKaJisFsDdD85C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pMz2RmY0dW73foMP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/save-shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@saveShipping',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@saveShipping',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::pMz2RmY0dW73foMP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hHf9JtQ5QuW6G9JO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/save-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@savePayment',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@savePayment',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::hHf9JtQ5QuW6G9JO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1uCJ9jiFdIUW6oSC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/check-minimum-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@checkMinimumOrder',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@checkMinimumOrder',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::1uCJ9jiFdIUW6oSC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4ArN59bvIoJCFr08' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/save-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'theme',
          2 => 'currency',
        ),
        'uses' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@saveOrder',
        'controller' => 'Webkul\\API\\Http\\Controllers\\Shop\\CheckoutController@saveOrder',
        'namespace' => 'Webkul\\API\\Http\\Controllers\\Shop',
        'prefix' => 'api/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::4ArN59bvIoJCFr08',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/velocity/content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@index',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@index',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'velocity::admin.content.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/velocity/content/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@search',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@search',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/velocity/content/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@create',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@create',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'velocity::admin.content.create',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/velocity/content/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@store',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@store',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'velocity.admin.content.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/velocity/content/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@edit',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@edit',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'velocity::admin.content.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/velocity/content/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@update',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@update',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'velocity.admin.content.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/velocity/content/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@destroy',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@destroy',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.content.mass-delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/velocity/content/masssdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@massDestroy',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ContentController@massDestroy',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.content.mass-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'velocity.admin.content.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.meta-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/velocity/meta-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ConfigurationController@renderMetaData',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ConfigurationController@renderMetaData',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.meta-data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'velocity::admin.meta-info.meta-data',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.admin.store.meta-data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/velocity/meta-data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_locale',
          2 => 'admin',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ConfigurationController@storeMetaData',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Admin\\ConfigurationController@storeMetaData',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Admin',
        'prefix' => '/admin/velocity',
        'where' => 
        array (
        ),
        'as' => 'velocity.admin.store.meta-data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'velocity.admin.meta-data',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.shop.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@fetchProductDetails',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@fetchProductDetails',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.shop.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.search.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categorysearch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@search',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@search',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.search.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::search.search',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.categoriest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@fetchCategories',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@fetchCategories',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.categoriest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.category.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@categoryDetails',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@categoryDetails',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.category.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.fancy.category.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fancy-category-details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@fetchFancyCategoryDetails',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@fetchFancyCategoryDetails',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.fancy.category.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.cart.get.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mini-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\CartController@getMiniCartDetails',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\CartController@getMiniCartDetails',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.cart.get.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.cart.add.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\CartController@addProductToCart',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\CartController@addProductToCart',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.cart.add.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.cart.remove.product' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cart/remove/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\CartController@removeProductFromCart',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\CartController@removeProductFromCart',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.cart.remove.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.product.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'comparison',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@getComparisonList',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@getComparisonList',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.product.compare',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::guest.compare.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.customer.product.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/comparison',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@getComparisonList',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@getComparisonList',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.customer.product.compare',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop::customers.account.compare.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.product.add.compare' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'comparison',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@addCompareProduct',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@addCompareProduct',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.product.add.compare',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.product.delete.compare' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'comparison',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@deleteComparisonProduct',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ComparisonController@deleteComparisonProduct',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.product.delete.compare',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.product.item-count' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'items-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@getItemsCount',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@getItemsCount',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.product.item-count',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.product.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'detailed-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@getDetailedProducts',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@getDetailedProducts',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.product.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'velocity.category.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category-products/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@getCategoryProducts',
        'controller' => 'Webkul\\Velocity\\Http\\Controllers\\Shop\\ShopController@getCategoryProducts',
        'namespace' => 'Webkul\\Velocity\\Http\\Controllers\\Shop',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'velocity.category.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'booking_product.slots.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-slots/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'theme',
          2 => 'locale',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\BookingProduct\\Http\\Controllers\\Shop\\BookingProductController@index',
        'controller' => 'Webkul\\BookingProduct\\Http\\Controllers\\Shop\\BookingProductController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'booking_product.slots.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.social-login.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/social-login/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@redirectToProvider',
        'controller' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.social-login.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.social-login.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/social-login/{provider}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@handleProviderCallback',
        'controller' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'customer.social-login.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'customer.profile.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
