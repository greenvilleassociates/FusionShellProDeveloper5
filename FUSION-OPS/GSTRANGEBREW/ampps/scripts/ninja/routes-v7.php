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
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
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
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TppWlNK1N7TkIY3d',
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
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tt1PPqxH0nmuQiIZ',
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
      '/api/v1/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'signup.submit',
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
      '/api/v1/oauth_login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ut7umwVzfNwCio5x',
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
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.submit',
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
      '/api/v1/reset_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NaXESfXZT1gFtGpO',
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
      '/api/v1/check_subdomain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.check_subdomain',
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
      '/api/v1/ping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.ping',
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
      '/api/v1/health_check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.health_check',
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
      '/api/v1/activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.',
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
      '/api/v1/claim_license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.license.index',
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
      '/api/v1/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.index',
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
            '_route' => 'api.clients.store',
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
      '/api/v1/clients/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.create',
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
      '/api/v1/client_gateway_tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.index',
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
            '_route' => 'api.client_gateway_tokens.store',
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
      '/api/v1/client_gateway_tokens/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.create',
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
      '/api/v1/connected_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::5VD56w9qsjNK5Hcb',
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
      '/api/v1/connected_account/gmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::mefuwvaSlFoiHEEd',
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
      '/api/v1/client_statement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client.statement',
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
      '/api/v1/companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.index',
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
            '_route' => 'api.companies.store',
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
      '/api/v1/companies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.create',
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
      '/api/v1/company_ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_ledger.index',
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
      '/api/v1/company_gateways' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.index',
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
            '_route' => 'api.company_gateways.store',
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
      '/api/v1/company_gateways/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.create',
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
      '/api/v1/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.index',
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
            '_route' => 'api.credits.store',
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
      '/api/v1/credits/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.create',
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
      '/api/v1/designs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.index',
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
            '_route' => 'api.designs.store',
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
      '/api/v1/designs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.create',
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
      '/api/v1/designs/set/default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.default',
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
      '/api/v1/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.index',
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
            '_route' => 'api.documents.store',
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
      '/api/v1/documents/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.create',
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
      '/api/v1/emails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.email.send',
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
      '/api/v1/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.index',
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
            '_route' => 'api.expenses.store',
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
      '/api/v1/expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.create',
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
      '/api/v1/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.export.index',
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
      '/api/v1/expense_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.index',
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
            '_route' => 'api.expense_categories.store',
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
      '/api/v1/expense_categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.create',
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
      '/api/v1/group_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.index',
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
            '_route' => 'api.group_settings.store',
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
      '/api/v1/group_settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.create',
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
      '/api/v1/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.import.import',
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
      '/api/v1/import_json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.import.import_json',
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
      '/api/v1/preimport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.import.preimport',
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
      '/api/v1/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.index',
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
            '_route' => 'api.invoices.store',
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
      '/api/v1/invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.create',
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
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.logout',
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
      '/api/v1/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.migrate.start',
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
      '/api/v1/migration/start' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::g0Ie4OTs0jcJvvN2',
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
      '/api/v1/one_time_token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::qtWOd9opwdGXigWY',
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
      '/api/v1/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.index',
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
            '_route' => 'api.payments.store',
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
      '/api/v1/payments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.create',
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
      '/api/v1/payment_terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.index',
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
            '_route' => 'api.payment_terms.store',
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
      '/api/v1/payment_terms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.create',
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
      '/api/v1/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview.show',
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
      '/api/v1/live_preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview.live',
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
      '/api/v1/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.index',
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
            '_route' => 'api.products.store',
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
      '/api/v1/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.create',
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
      '/api/v1/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.index',
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
            '_route' => 'api.projects.store',
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
      '/api/v1/projects/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.create',
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
      '/api/v1/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.index',
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
            '_route' => 'api.quotes.store',
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
      '/api/v1/quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.create',
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
      '/api/v1/recurring_expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.index',
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
            '_route' => 'api.recurring_expenses.store',
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
      '/api/v1/recurring_expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.create',
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
      '/api/v1/recurring_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.index',
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
            '_route' => 'api.recurring_invoices.store',
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
      '/api/v1/recurring_invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.create',
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
      '/api/v1/recurring_quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.index',
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
            '_route' => 'api.recurring_quotes.store',
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
      '/api/v1/recurring_quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.create',
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
      '/api/v1/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::gcC4aGw7tgUBrKmX',
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
      '/api/v1/scheduler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::sUXvusxEdEplsQAb',
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
      '/api/v1/support/messages/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::GnB6HDmz3eYbMhqQ',
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
      '/api/v1/self-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::rB611ZltzDbsFTGg',
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
      '/api/v1/self-update/check_version' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::ps3re9g549e6GaZz',
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
      '/api/v1/system_logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.index',
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
            '_route' => 'api.system_logs.store',
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
      '/api/v1/system_logs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.create',
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
      '/api/v1/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.index',
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
            '_route' => 'api.tasks.store',
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
      '/api/v1/tasks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.create',
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
      '/api/v1/task_statuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.index',
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
            '_route' => 'api.task_statuses.store',
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
      '/api/v1/task_statuses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.create',
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
      '/api/v1/tax_rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.index',
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
            '_route' => 'api.tax_rates.store',
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
      '/api/v1/tax_rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.create',
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
      '/api/v1/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.templates.show',
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
      '/api/v1/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.index',
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
            '_route' => 'api.tokens.store',
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
      '/api/v1/tokens/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.create',
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
      '/api/v1/settings/enable_two_factor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::vaGyMfkEjsKM5rcx',
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
            '_route' => 'api.generated::8pKhF8XaXIvdESGs',
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
      '/api/v1/settings/disable_two_factor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::xm4wFFTaEWwLkkaA',
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
      '/api/v1/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.index',
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
            '_route' => 'api.vendors.store',
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
      '/api/v1/vendors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.create',
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
      '/api/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::KlCj9EzEsPjoPfVj',
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
            '_route' => 'api.generated::1ajaqh8VEMgbG52c',
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
      '/api/v1/webhooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.index',
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
            '_route' => 'api.webhooks.store',
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
      '/api/v1/webhooks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.create',
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
      '/api/v1/stripe/update_payment_methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.update',
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
      '/api/v1/stripe/import_customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.import',
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
      '/api/v1/stripe/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.verify',
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
      '/api/v1/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.index',
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
            '_route' => 'api.subscriptions.store',
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
      '/api/v1/subscriptions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.create',
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
      '/api/v1/statics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::DvwJZWmtRooMzjOT',
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
      '/api/v1/postmark_webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kPjLMoBfcF9BhfPB',
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
      '/token_hash_router' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VtCd4sYHMhm16oB1',
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
      '/webcron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QBiZIUwlq2SHzLyQ',
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
      '/api/v1/get_migration_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oNspOspVkDMpqSam',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M8PgPYsohvdVDiUs',
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
      '/setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyzdofKHX0Y4Yclm',
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
            '_route' => 'generated::G5lQ2ZcuQIGgiVug',
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
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qE0hkV5JQyt884z9',
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
      '/setup/check_db' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Xj8ZwtTdTuf6Vp0',
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
      '/setup/check_mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y7RXPNDr9Rf1956P',
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
      '/setup/check_pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbgtdVhQYhQ9B9eC',
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
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.update',
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
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
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
      '/wepay/finished' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wepay.finished',
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
      '/stripe/completed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe_connect.return',
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
      '/api/v1/contact/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tFKWV1JkzKj76H8o',
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
      '/api/v1/contact/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact.',
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
      '/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.catchall',
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
      '/client/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.login',
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
            '_route' => 'client.login.submit',
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
      '/client/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.request',
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
            '_route' => 'client.password.update',
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
      '/client/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.email',
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
      '/error' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.error',
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
      '/client/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.dashboard',
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
      '/client/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoices.index',
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
      '/client/invoices/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoices.bulk',
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
      '/client/recurring_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoices.index',
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
      '/client/payments/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.process',
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
      '/client/payments/credit_response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.credit_response',
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
      '/client/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.index',
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
      '/client/payments/process/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.response',
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
            '_route' => 'client.payments.response.get',
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
      '/client/payment_methods/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.confirm',
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
      '/client/payment_methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.index',
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
            '_route' => 'client.payment_methods.store',
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
      '/client/payment_methods/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.create',
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
      '/client/quotes/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quotes.bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quotes.index',
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
      '/client/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credits.index',
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
      '/client/documents/download_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.download_multiple',
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
      '/client/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.index',
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
      '/client/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscriptions.index',
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
      '/client/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.tasks.index',
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
      '/client/statement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.statement',
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
      '/client/statement/raw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.statement.raw',
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
      '/client/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.upload.store',
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
      '/client/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.logout',
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
      '/api/v1/shop/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCgQGrvV0NnapE3a',
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
      '/api/v1/shop/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3W3uqwZ1t3ydujq',
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
      '/api/v1/shop/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i2Zcox8GQBDiMsTp',
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
      '/api/v1/shop/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N6go6flW4YUobB0I',
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
      0 => '{^(?|/livewire/(?|message/([^/]++)(*:36)|preview\\-file/([^/]++)(*:65))|/a(?|pi/v1/(?|activities/download_entity/([^/]++)(*:122)|c(?|lient(?|s/(?|([^/]++)(?|(*:158)|/(?|edit(*:174)|adjust_ledger(*:195)|upload(*:209))|(*:218))|bulk(*:231))|_gateway_tokens/([^/]++)(?|(*:267)|/edit(*:280)|(*:288)))|ompan(?|ies/(?|purge(?|/([^/]++)(*:330)|_save_settings/([^/]++)(*:361))|([^/]++)(?|(*:381)|/(?|edit(*:397)|upload(*:411)|default(*:426))|(*:435)))|y_(?|gateways/(?|([^/]++)(?|(*:473)|/edit(*:486)|(*:494))|bulk(*:507))|users/([^/]++)(*:530)))|redits/(?|([^/]++)(?|(*:561)|/(?|edit(*:577)|upload(*:591)|([^/]++)(*:607))|(*:616))|bulk(*:629)))|d(?|esigns/(?|([^/]++)(?|(*:664)|/edit(*:677)|(*:685))|bulk(*:698))|ocuments/(?|([^/]++)(?|(*:730)|/(?|edit(*:746)|download(*:762))|(*:771))|bulk(*:784)))|expense(?|s/(?|([^/]++)(?|(*:820)|/(?|edit(*:836)|upload(*:850))|(*:859))|bulk(*:872))|_categories/(?|([^/]++)(?|(*:907)|/edit(*:920)|(*:928))|bulk(*:941)))|group_settings/(?|([^/]++)(?|(*:980)|/edit(*:993)|(*:1001))|bulk(*:1015))|invoice(?|s/(?|([^/]++)(?|(*:1051)|/(?|edit(*:1068)|delivery_note(*:1090)|([^/]++)(*:1107)|upload(*:1122))|(*:1132))|bulk(*:1146))|/([^/]++)/download(*:1174))|migration/purge(?|/([^/]++)(*:1211)|_save_settings/([^/]++)(*:1243))|p(?|ayment(?|s/(?|([^/]++)(?|(*:1282)|/edit(*:1296)|(*:1305))|refund(*:1321)|bulk(*:1334)|([^/]++)/upload(*:1358))|_terms/(?|([^/]++)(?|(*:1389)|/edit(*:1403)|(*:1412))|bulk(*:1426)))|ro(?|ducts/(?|([^/]++)(?|(*:1462)|/edit(*:1476)|(*:1485))|bulk(*:1499)|([^/]++)/upload(*:1523))|jects/(?|([^/]++)(?|(*:1553)|/edit(*:1567)|(*:1576))|bulk(*:1590)|([^/]++)/upload(*:1614))))|quotes/(?|([^/]++)(?|(*:1647)|/(?|edit(*:1664)|([^/]++)(*:1681))|(*:1691))|bulk(*:1705)|([^/]++)/upload(*:1729))|recurring_(?|expenses/(?|([^/]++)(?|(*:1775)|/edit(*:1789)|(*:1798))|bulk(*:1812)|([^/]++)/upload(*:1836))|invoices/(?|([^/]++)(?|(*:1869)|/edit(*:1883)|(*:1892))|bulk(*:1906)|([^/]++)/upload(*:1930))|quotes/(?|([^/]++)(?|(*:1961)|/edit(*:1975)|(*:1984))|bulk(*:1998)|([^/]++)/upload(*:2022)))|s(?|ystem_logs/([^/]++)(?|(*:2059)|/edit(*:2073)|(*:2082))|ubscriptions/(?|([^/]++)(?|(*:2119)|/edit(*:2133)|(*:2142))|bulk(*:2156))|hop/(?|client/([^/]++)(*:2188)|invoice/([^/]++)(*:2213)|product/([^/]++)(*:2238)))|t(?|a(?|sk(?|s/(?|([^/]++)(?|(*:2278)|/edit(*:2292)|(*:2301))|bulk(*:2315)|([^/]++)/upload(*:2339)|sort(*:2352))|_statuses/(?|([^/]++)(?|(*:2386)|/edit(*:2400)|(*:2409))|bulk(*:2423)))|x_rates/(?|([^/]++)(?|(*:2456)|/edit(*:2470)|(*:2479))|bulk(*:2493)))|okens/(?|([^/]++)(?|(*:2524)|/edit(*:2538)|(*:2547))|bulk(*:2561)))|vendors/(?|([^/]++)(?|(*:2594)|/edit(*:2608)|(*:2617))|bulk(*:2631)|([^/]++)/upload(*:2655))|user(?|s/(?|([^/]++)(?|(*:2688)|/detach_from_company(*:2717))|bulk(*:2731)|([^/]++)/invite(*:2755))|/([^/]++)/reconfirm(*:2784))|webhooks/(?|([^/]++)(?|(*:2817)|/edit(*:2831)|(*:2840))|bulk(*:2854)))|uth/([^/]++)(*:2877))|/p(?|a(?|yment_(?|webhook/([^/]++)/([^/]++)(*:2930)|notification_webhook/([^/]++)/([^/]++)/([^/]++)(*:2986))|ssword/reset/([^/]++)(*:3017))|hantom/([^/]++)/([^/]++)(*:3051))|/wepay/signup/([^/]++)(*:3083)|/user/confirm/([^/]++)(?|(*:3117))|/stripe/signup/([^/]++)(*:3150)|/c(?|heckout/3ds_redirect/([^/]++)/([^/]++)/([^/]++)(*:3211)|lient/(?|re(?|gister(?:/([^/]++))?(?|(*:3257))|curring_invoice(?|s/([^/]++)(?|(*:3298)|/request_cancellation(*:3328))|/([^/]++)(?|(*:3350)|/download_pdf(*:3372))))|p(?|a(?|ssword/reset/([^/]++)(*:3413)|yment(?|/([^/]++)/([^/]++)(*:3448)|s/([^/]++)(*:3467)|_methods/([^/]++)(?|/verification(?|(*:3512))|(*:3522))))|rofile/([^/]++)/(?|edit(?|(*:3560)|_client(*:3576))|localization(*:3598)))|key_login/([^/]++)(*:3627)|magic_link/([^/]++)(*:3655)|ninja/([^/]++)/([^/]++)(*:3687)|invoice(?|s/([^/]++)(?|(*:3719)|(*:3728))|/([^/]++)(?|(*:3750)|/download_pdf(*:3772)))|quote(?|s/([^/]++)(?|(*:3804)|(*:3813))|/([^/]++)(?|(*:3835)|/download_pdf(*:3857)))|c(?|redit(?|s/([^/]++)(?|(*:3893)|(*:3902))|/([^/]++)(?|(*:3924)|/download_pdf(*:3946)))|lient/switch_company/([^/]++)(*:3986))|documents/([^/]++)(?|/download(*:4026)|(*:4035))|subscriptions/([^/]++)/p(?|lan_switch/([^/]++)(*:4091)|urchase(*:4107))|([^/]++)/([^/]++)/download(*:4143)|pay/([^/]++)(*:4164)))|/mollie/3ds_redirect/([^/]++)/([^/]++)/([^/]++)(*:4222)|/view/([^/]++)/([^/]++)(?|(*:4257)|/password(?|(*:4278)))|/tmp_pdf/([^/]++)(*:4306)|/documents/([^/]++)(*:4334)|/(.*)(*:4348))/?$}sDu',
    ),
    3 => 
    array (
      36 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
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
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
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
      122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::tpjJbzzFK6w8EnFB',
          ),
          1 => 
          array (
            0 => 'activity',
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
      158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.show',
          ),
          1 => 
          array (
            0 => 'client',
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
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.edit',
          ),
          1 => 
          array (
            0 => 'client',
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
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.adjust_ledger',
          ),
          1 => 
          array (
            0 => 'client',
          ),
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
      209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.upload',
          ),
          1 => 
          array (
            0 => 'client',
          ),
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
      218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client',
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
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.bulk',
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
      267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.show',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
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
      280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.edit',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
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
      288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.update',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.client_gateway_tokens.destroy',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
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
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::A9qWYTVr5VygYM06',
          ),
          1 => 
          array (
            0 => 'company',
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
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::nOsjPHwJ0DUb7ZCt',
          ),
          1 => 
          array (
            0 => 'company',
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
      381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.show',
          ),
          1 => 
          array (
            0 => 'company',
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
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.edit',
          ),
          1 => 
          array (
            0 => 'company',
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
      411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::L1LFi8Pgo91lFMQS',
          ),
          1 => 
          array (
            0 => 'company',
          ),
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
      426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::qEml3P9KYo4uTM5m',
          ),
          1 => 
          array (
            0 => 'company',
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
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.update',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.companies.destroy',
          ),
          1 => 
          array (
            0 => 'company',
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
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.show',
          ),
          1 => 
          array (
            0 => 'company_gateway',
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
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.edit',
          ),
          1 => 
          array (
            0 => 'company_gateway',
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
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.update',
          ),
          1 => 
          array (
            0 => 'company_gateway',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.company_gateways.destroy',
          ),
          1 => 
          array (
            0 => 'company_gateway',
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
      507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.bulk',
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
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::M0Z8HalJLZKSPQZi',
          ),
          1 => 
          array (
            0 => 'user',
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
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.show',
          ),
          1 => 
          array (
            0 => 'credit',
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
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.edit',
          ),
          1 => 
          array (
            0 => 'credit',
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
      591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.upload',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
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
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.action',
          ),
          1 => 
          array (
            0 => 'credit',
            1 => 'action',
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
      616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.update',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.credits.destroy',
          ),
          1 => 
          array (
            0 => 'credit',
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
      629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.bulk',
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
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.show',
          ),
          1 => 
          array (
            0 => 'design',
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
      677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.edit',
          ),
          1 => 
          array (
            0 => 'design',
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
      685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.update',
          ),
          1 => 
          array (
            0 => 'design',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.designs.destroy',
          ),
          1 => 
          array (
            0 => 'design',
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
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.bulk',
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
      730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.show',
          ),
          1 => 
          array (
            0 => 'document',
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
      746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.edit',
          ),
          1 => 
          array (
            0 => 'document',
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
      762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.download',
          ),
          1 => 
          array (
            0 => 'document',
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
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.update',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.documents.destroy',
          ),
          1 => 
          array (
            0 => 'document',
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
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.bulk',
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
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.show',
          ),
          1 => 
          array (
            0 => 'expense',
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
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.edit',
          ),
          1 => 
          array (
            0 => 'expense',
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
      850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::dcTCn7l7qS6k2YI2',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
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
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.update',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expense',
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
      872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.bulk',
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
      907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.show',
          ),
          1 => 
          array (
            0 => 'expense_category',
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
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.edit',
          ),
          1 => 
          array (
            0 => 'expense_category',
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
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.update',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.expense_categories.destroy',
          ),
          1 => 
          array (
            0 => 'expense_category',
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
      941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.bulk',
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
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.show',
          ),
          1 => 
          array (
            0 => 'group_setting',
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
      993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.edit',
          ),
          1 => 
          array (
            0 => 'group_setting',
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
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.update',
          ),
          1 => 
          array (
            0 => 'group_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.group_settings.destroy',
          ),
          1 => 
          array (
            0 => 'group_setting',
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
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::qY9YVJtgq6Ppd9W9',
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
      1051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
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
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.edit',
          ),
          1 => 
          array (
            0 => 'invoice',
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
      1090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.delivery_note',
          ),
          1 => 
          array (
            0 => 'invoice',
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
      1107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.action',
          ),
          1 => 
          array (
            0 => 'invoice',
            1 => 'action',
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
      1122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.upload',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
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
      1132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
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
      1146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.bulk',
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
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.downloadPdf',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      1211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::3F20tBO5G8mQz954',
          ),
          1 => 
          array (
            0 => 'company',
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
      1243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::onKsXMRbNjfXl2ot',
          ),
          1 => 
          array (
            0 => 'company',
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
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
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
      1296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.edit',
          ),
          1 => 
          array (
            0 => 'payment',
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
      1305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.update',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.payments.destroy',
          ),
          1 => 
          array (
            0 => 'payment',
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
      1321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.refund',
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
      1334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.bulk',
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
      1358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::uYNnJfpzdtNxDzqr',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
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
      1389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.show',
          ),
          1 => 
          array (
            0 => 'payment_term',
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
      1403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.edit',
          ),
          1 => 
          array (
            0 => 'payment_term',
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
      1412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.update',
          ),
          1 => 
          array (
            0 => 'payment_term',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.payment_terms.destroy',
          ),
          1 => 
          array (
            0 => 'payment_term',
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
      1426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.bulk',
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
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.show',
          ),
          1 => 
          array (
            0 => 'product',
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
      1476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
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
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
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
      1499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.bulk',
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
      1523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::jOSnAF9J2lmUjRQn',
          ),
          1 => 
          array (
            0 => 'product',
          ),
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
      1553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.show',
          ),
          1 => 
          array (
            0 => 'project',
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
      1567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.edit',
          ),
          1 => 
          array (
            0 => 'project',
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
      1576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.update',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.projects.destroy',
          ),
          1 => 
          array (
            0 => 'project',
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
      1590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.bulk',
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
      1614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.upload',
          ),
          1 => 
          array (
            0 => 'project',
          ),
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
      1647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.show',
          ),
          1 => 
          array (
            0 => 'quote',
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
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.edit',
          ),
          1 => 
          array (
            0 => 'quote',
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
      1681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.action',
          ),
          1 => 
          array (
            0 => 'quote',
            1 => 'action',
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
      1691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.update',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.quotes.destroy',
          ),
          1 => 
          array (
            0 => 'quote',
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
      1705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.bulk',
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
      1729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::k1r7OqCSvsNqTPRj',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
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
      1775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.show',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
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
      1789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.edit',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
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
      1798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.update',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.recurring_expenses.destroy',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
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
      1812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.bulk',
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
      1836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::tL7DwzhOVgA5stMV',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
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
      1869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.show',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
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
      1883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.edit',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
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
      1892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.update',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.recurring_invoices.destroy',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
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
      1906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.bulk',
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
      1930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::OiI1l4aNVOOxZqsY',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
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
      1961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.show',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
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
      1975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.edit',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
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
      1984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.update',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.recurring_quotes.destroy',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
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
      1998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.bulk',
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
      2022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::zMc6KBZ3hyxqUfy4',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
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
      2059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.show',
          ),
          1 => 
          array (
            0 => 'system_log',
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
      2073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.edit',
          ),
          1 => 
          array (
            0 => 'system_log',
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
      2082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.update',
          ),
          1 => 
          array (
            0 => 'system_log',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.system_logs.destroy',
          ),
          1 => 
          array (
            0 => 'system_log',
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
      2119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      2133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      2142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.update',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.subscriptions.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      2156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.bulk',
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
      2188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1OQJ27WbP6D8SIvM',
          ),
          1 => 
          array (
            0 => 'contact_key',
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
      2213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6gozFxOsJDivRj9t',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      2238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cFMZ0qDtJ7GfFnR7',
          ),
          1 => 
          array (
            0 => 'product_key',
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
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.show',
          ),
          1 => 
          array (
            0 => 'task',
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
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.edit',
          ),
          1 => 
          array (
            0 => 'task',
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
      2301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.update',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.tasks.destroy',
          ),
          1 => 
          array (
            0 => 'task',
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
      2315 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.bulk',
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
      2339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::j8yZaZbTBKeCjk1A',
          ),
          1 => 
          array (
            0 => 'task',
          ),
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
      2352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::BB1xny25xPe47z33',
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
      2386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.show',
          ),
          1 => 
          array (
            0 => 'task_status',
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
      2400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.edit',
          ),
          1 => 
          array (
            0 => 'task_status',
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
      2409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.update',
          ),
          1 => 
          array (
            0 => 'task_status',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.task_statuses.destroy',
          ),
          1 => 
          array (
            0 => 'task_status',
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
      2423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.bulk',
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
      2456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.show',
          ),
          1 => 
          array (
            0 => 'tax_rate',
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
      2470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.edit',
          ),
          1 => 
          array (
            0 => 'tax_rate',
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
      2479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.update',
          ),
          1 => 
          array (
            0 => 'tax_rate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.tax_rates.destroy',
          ),
          1 => 
          array (
            0 => 'tax_rate',
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
      2493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.bulk',
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
      2524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.show',
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
      2538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.update',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token',
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
      2561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.bulk',
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
      2594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.show',
          ),
          1 => 
          array (
            0 => 'vendor',
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
      2608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.edit',
          ),
          1 => 
          array (
            0 => 'vendor',
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
      2617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.update',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.vendors.destroy',
          ),
          1 => 
          array (
            0 => 'vendor',
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
      2631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.bulk',
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
      2655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::3b8B3rkQHC3wzuXY',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
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
      2688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::83Jh4yzoNCiSUZDb',
          ),
          1 => 
          array (
            0 => 'user',
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
      2717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::HoOwi8ppm65gXslP',
          ),
          1 => 
          array (
            0 => 'user',
          ),
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
      2731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.users.bulk',
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
      2755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::4m5ahVPQ8eL68ja5',
          ),
          1 => 
          array (
            0 => 'user',
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
      2784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::vU72UndA4W9rwm4o',
          ),
          1 => 
          array (
            0 => 'user',
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
      2817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.show',
          ),
          1 => 
          array (
            0 => 'webhook',
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
      2831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.edit',
          ),
          1 => 
          array (
            0 => 'webhook',
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
      2840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.update',
          ),
          1 => 
          array (
            0 => 'webhook',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.webhooks.destroy',
          ),
          1 => 
          array (
            0 => 'webhook',
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
      2854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.bulk',
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
      2877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rKEFfeCmIdsofALT',
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
      2930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_webhook',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_notification_webhook',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
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
      3051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'phantom_view',
          ),
          1 => 
          array (
            0 => 'entity',
            1 => 'invitation_key',
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
      3083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wepay.signup',
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
      3117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EKPfsWTrOiCBAZZs',
          ),
          1 => 
          array (
            0 => 'confirmation_code',
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
            '_route' => 'generated::XGcNAfJMP3tRf1RJ',
          ),
          1 => 
          array (
            0 => 'confirmation_code',
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
      3150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe_connect.initialization',
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
      3211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout.3ds_redirect',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'hash',
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
      3257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.register',
            'company_key' => NULL,
          ),
          1 => 
          array (
            0 => 'company_key',
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
            '_route' => 'generated::fGQAs5vBvtcA1HHu',
            'company_key' => NULL,
          ),
          1 => 
          array (
            0 => 'company_key',
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
      3298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoice.show',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
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
      3328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoices.request_cancellation',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
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
      3350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::13DpDmBMWrAZ6Gkp',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoice.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.reset',
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
      3448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::58rdKPZTHQkyeshQ',
          ),
          1 => 
          array (
            0 => 'contact_key',
            1 => 'payment_id',
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
            '_route' => 'client.payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
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
      3512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.verification',
          ),
          1 => 
          array (
            0 => 'payment_method',
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
            '_route' => 'client.',
          ),
          1 => 
          array (
            0 => 'payment_method',
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
      3522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.show',
          ),
          1 => 
          array (
            0 => 'payment_method',
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
            '_route' => 'client.payment_methods.destroy',
          ),
          1 => 
          array (
            0 => 'payment_method',
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
      3560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.edit',
          ),
          1 => 
          array (
            0 => 'client_contact',
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
            '_route' => 'client.profile.update',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
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
      3576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.edit_client',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
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
      3598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.edit_localization',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
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
      3627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact_login',
          ),
          1 => 
          array (
            0 => 'contact_key',
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
      3655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact_magic_link',
          ),
          1 => 
          array (
            0 => 'magic_link',
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
      3687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.ninja_contact_login',
          ),
          1 => 
          array (
            0 => 'contact_key',
            1 => 'company_key',
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
      3719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoice.show',
          ),
          1 => 
          array (
            0 => 'invoice',
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
      3728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoice.show_invitation',
          ),
          1 => 
          array (
            0 => 'invoice_invitation',
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
      3750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::TXP48fYr9fp6sH4H',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoice.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quote.show',
          ),
          1 => 
          array (
            0 => 'quote',
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
      3813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quote.show_invitation',
          ),
          1 => 
          array (
            0 => 'quote_invitation',
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
      3835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::77kdUvP8aSuQMxzS',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quote.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credit.show',
          ),
          1 => 
          array (
            0 => 'credit',
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
      3902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credits.show_invitation',
          ),
          1 => 
          array (
            0 => 'credit_invitation',
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
      3924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::GsexX3pjNdNVrcwD',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credit.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      3986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.switch_company',
          ),
          1 => 
          array (
            0 => 'contact',
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
      4026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.download',
          ),
          1 => 
          array (
            0 => 'document',
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
      4035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.show',
          ),
          1 => 
          array (
            0 => 'document',
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
      4091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscription.plan_switch',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
            1 => 'target',
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
      4107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscription.purchase',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      4143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::NCVvmgwHu255yBcJ',
          ),
          1 => 
          array (
            0 => 'entity',
            1 => 'invitation_key',
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
      4164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.pay.invoice',
          ),
          1 => 
          array (
            0 => 'invitation_key',
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
      4222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mollie.3ds_redirect',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'hash',
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
      4257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.entity_view',
          ),
          1 => 
          array (
            0 => 'entity_type',
            1 => 'invitation_key',
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
      4278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.entity_view.password',
          ),
          1 => 
          array (
            0 => 'entity_type',
            1 => 'invitation_key',
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
            '_route' => 'generated::dOU2sbqWc5HS969W',
          ),
          1 => 
          array (
            0 => 'entity_type',
            1 => 'invitation_key',
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
      4306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tmp_pdf',
          ),
          1 => 
          array (
            0 => 'hash',
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
      4334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'documents.public_download',
          ),
          1 => 
          array (
            0 => 'document_hash',
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
      4348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B0t0zoYrYbdAcyNT',
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
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'generated::TppWlNK1N7TkIY3d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::TppWlNK1N7TkIY3d',
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
      'withTrashed' => false,
    ),
    'generated::Tt1PPqxH0nmuQiIZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::Tt1PPqxH0nmuQiIZ',
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
      'withTrashed' => false,
    ),
    'signup.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_secret_check',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@store',
        'controller' => 'App\\Http\\Controllers\\AccountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'signup.submit',
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
      'withTrashed' => false,
    ),
    'generated::ut7umwVzfNwCio5x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/oauth_login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_secret_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@oauthApiLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@oauthApiLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ut7umwVzfNwCio5x',
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
      'withTrashed' => false,
    ),
    'login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_secret_check',
          2 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@apiLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@apiLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.submit',
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
      'withTrashed' => false,
    ),
    'generated::NaXESfXZT1gFtGpO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reset_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_secret_check',
          2 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NaXESfXZT1gFtGpO',
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
      'withTrashed' => false,
    ),
    'api.check_subdomain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/check_subdomain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SubdomainController@index',
        'controller' => 'App\\Http\\Controllers\\SubdomainController@index',
        'as' => 'api.check_subdomain',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.ping' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/ping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PingController@index',
        'controller' => 'App\\Http\\Controllers\\PingController@index',
        'as' => 'api.ping',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.health_check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/health_check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PingController@health',
        'controller' => 'App\\Http\\Controllers\\PingController@health',
        'as' => 'api.health_check',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ActivityController@index',
        'controller' => 'App\\Http\\Controllers\\ActivityController@index',
        'as' => 'api.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::tpjJbzzFK6w8EnFB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/activities/download_entity/{activity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ActivityController@downloadHistoricalEntity',
        'controller' => 'App\\Http\\Controllers\\ActivityController@downloadHistoricalEntity',
        'as' => 'api.generated::tpjJbzzFK6w8EnFB',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.license.index' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/claim_license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\LicenseController@index',
        'controller' => 'App\\Http\\Controllers\\LicenseController@index',
        'as' => 'api.license.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.index',
        'uses' => 'App\\Http\\Controllers\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\ClientController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.create',
        'uses' => 'App\\Http\\Controllers\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\ClientController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.store',
        'uses' => 'App\\Http\\Controllers\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\ClientController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.show',
        'uses' => 'App\\Http\\Controllers\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\ClientController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.edit',
        'uses' => 'App\\Http\\Controllers\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.update',
        'uses' => 'App\\Http\\Controllers\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\ClientController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.clients.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.adjust_ledger' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/clients/{client}/adjust_ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@adjustLedger',
        'controller' => 'App\\Http\\Controllers\\ClientController@adjustLedger',
        'as' => 'api.clients.adjust_ledger',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/clients/{client}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@upload',
        'controller' => 'App\\Http\\Controllers\\ClientController@upload',
        'as' => 'api.clients.upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.clients.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/clients/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@bulk',
        'controller' => 'App\\Http\\Controllers\\ClientController@bulk',
        'as' => 'api.clients.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.index',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@index',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.create',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@create',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/client_gateway_tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.store',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@store',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.show',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@show',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.edit',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.update',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@update',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::5VD56w9qsjNK5Hcb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/connected_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ConnectedAccountController@index',
        'controller' => 'App\\Http\\Controllers\\ConnectedAccountController@index',
        'as' => 'api.generated::5VD56w9qsjNK5Hcb',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::mefuwvaSlFoiHEEd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/connected_account/gmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ConnectedAccountController@handleGmailOauth',
        'controller' => 'App\\Http\\Controllers\\ConnectedAccountController@handleGmailOauth',
        'as' => 'api.generated::mefuwvaSlFoiHEEd',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.client.statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/client_statement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientStatementController@statement',
        'controller' => 'App\\Http\\Controllers\\ClientStatementController@statement',
        'as' => 'api.client.statement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::A9qWYTVr5VygYM06' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies/purge/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'as' => 'api.generated::A9qWYTVr5VygYM06',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::nOsjPHwJ0DUb7ZCt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies/purge_save_settings/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'as' => 'api.generated::nOsjPHwJ0DUb7ZCt',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.index',
        'uses' => 'App\\Http\\Controllers\\CompanyController@index',
        'controller' => 'App\\Http\\Controllers\\CompanyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.create',
        'uses' => 'App\\Http\\Controllers\\CompanyController@create',
        'controller' => 'App\\Http\\Controllers\\CompanyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.store',
        'uses' => 'App\\Http\\Controllers\\CompanyController@store',
        'controller' => 'App\\Http\\Controllers\\CompanyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.show',
        'uses' => 'App\\Http\\Controllers\\CompanyController@show',
        'controller' => 'App\\Http\\Controllers\\CompanyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies/{company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.edit',
        'uses' => 'App\\Http\\Controllers\\CompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\CompanyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.update',
        'uses' => 'App\\Http\\Controllers\\CompanyController@update',
        'controller' => 'App\\Http\\Controllers\\CompanyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.companies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.companies.destroy',
        'uses' => 'App\\Http\\Controllers\\CompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompanyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::L1LFi8Pgo91lFMQS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/companies/{company}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@upload',
        'controller' => 'App\\Http\\Controllers\\CompanyController@upload',
        'as' => 'api.generated::L1LFi8Pgo91lFMQS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::qEml3P9KYo4uTM5m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies/{company}/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@default',
        'controller' => 'App\\Http\\Controllers\\CompanyController@default',
        'as' => 'api.generated::qEml3P9KYo4uTM5m',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_ledger.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyLedgerController@index',
        'controller' => 'App\\Http\\Controllers\\CompanyLedgerController@index',
        'as' => 'api.company_ledger.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.index',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@index',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.create',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@create',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/company_gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.store',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@store',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.show',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@show',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.edit',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@edit',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.update',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@update',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.company_gateways.destroy',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.company_gateways.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/company_gateways/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@bulk',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@bulk',
        'as' => 'api.company_gateways.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::M0Z8HalJLZKSPQZi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/company_users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyUserController@update',
        'controller' => 'App\\Http\\Controllers\\CompanyUserController@update',
        'as' => 'api.generated::M0Z8HalJLZKSPQZi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.index',
        'uses' => 'App\\Http\\Controllers\\CreditController@index',
        'controller' => 'App\\Http\\Controllers\\CreditController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.create',
        'uses' => 'App\\Http\\Controllers\\CreditController@create',
        'controller' => 'App\\Http\\Controllers\\CreditController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.store',
        'uses' => 'App\\Http\\Controllers\\CreditController@store',
        'controller' => 'App\\Http\\Controllers\\CreditController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.show',
        'uses' => 'App\\Http\\Controllers\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\CreditController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/{credit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.edit',
        'uses' => 'App\\Http\\Controllers\\CreditController@edit',
        'controller' => 'App\\Http\\Controllers\\CreditController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.update',
        'uses' => 'App\\Http\\Controllers\\CreditController@update',
        'controller' => 'App\\Http\\Controllers\\CreditController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.credits.destroy',
        'uses' => 'App\\Http\\Controllers\\CreditController@destroy',
        'controller' => 'App\\Http\\Controllers\\CreditController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/credits/{credit}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@upload',
        'controller' => 'App\\Http\\Controllers\\CreditController@upload',
        'as' => 'api.credits.upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/{credit}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@action',
        'controller' => 'App\\Http\\Controllers\\CreditController@action',
        'as' => 'api.credits.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.credits.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/credits/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@bulk',
        'controller' => 'App\\Http\\Controllers\\CreditController@bulk',
        'as' => 'api.credits.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.index',
        'uses' => 'App\\Http\\Controllers\\DesignController@index',
        'controller' => 'App\\Http\\Controllers\\DesignController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.create',
        'uses' => 'App\\Http\\Controllers\\DesignController@create',
        'controller' => 'App\\Http\\Controllers\\DesignController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/designs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.store',
        'uses' => 'App\\Http\\Controllers\\DesignController@store',
        'controller' => 'App\\Http\\Controllers\\DesignController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs/{design}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.show',
        'uses' => 'App\\Http\\Controllers\\DesignController@show',
        'controller' => 'App\\Http\\Controllers\\DesignController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs/{design}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.edit',
        'uses' => 'App\\Http\\Controllers\\DesignController@edit',
        'controller' => 'App\\Http\\Controllers\\DesignController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/designs/{design}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.update',
        'uses' => 'App\\Http\\Controllers\\DesignController@update',
        'controller' => 'App\\Http\\Controllers\\DesignController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/designs/{design}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.designs.destroy',
        'uses' => 'App\\Http\\Controllers\\DesignController@destroy',
        'controller' => 'App\\Http\\Controllers\\DesignController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/designs/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignController@bulk',
        'controller' => 'App\\Http\\Controllers\\DesignController@bulk',
        'as' => 'api.designs.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.designs.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/designs/set/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignController@default',
        'controller' => 'App\\Http\\Controllers\\DesignController@default',
        'as' => 'api.designs.default',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.index',
        'uses' => 'App\\Http\\Controllers\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\DocumentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.create',
        'uses' => 'App\\Http\\Controllers\\DocumentController@create',
        'controller' => 'App\\Http\\Controllers\\DocumentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.store',
        'uses' => 'App\\Http\\Controllers\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\DocumentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.show',
        'uses' => 'App\\Http\\Controllers\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\DocumentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/{document}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.edit',
        'uses' => 'App\\Http\\Controllers\\DocumentController@edit',
        'controller' => 'App\\Http\\Controllers\\DocumentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.update',
        'uses' => 'App\\Http\\Controllers\\DocumentController@update',
        'controller' => 'App\\Http\\Controllers\\DocumentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.documents.destroy',
        'uses' => 'App\\Http\\Controllers\\DocumentController@destroy',
        'controller' => 'App\\Http\\Controllers\\DocumentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/{document}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\DocumentController@download',
        'as' => 'api.documents.download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.documents.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/documents/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentController@bulk',
        'controller' => 'App\\Http\\Controllers\\DocumentController@bulk',
        'as' => 'api.documents.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.email.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/emails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'user_verified',
        ),
        'uses' => 'App\\Http\\Controllers\\EmailController@send',
        'controller' => 'App\\Http\\Controllers\\EmailController@send',
        'as' => 'api.email.send',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses/{expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::dcTCn7l7qS6k2YI2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/expenses/{expense}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@upload',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@upload',
        'as' => 'api.generated::dcTCn7l7qS6k2YI2',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expenses.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expenses/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@bulk',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@bulk',
        'as' => 'api.expenses.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.export.index' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportController@index',
        'controller' => 'App\\Http\\Controllers\\ExportController@index',
        'as' => 'api.export.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expense_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.expense_categories.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.expense_categories.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expense_categories/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@bulk',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@bulk',
        'as' => 'api.expense_categories.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.index',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@index',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.create',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@create',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/group_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.store',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@store',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.show',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@show',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.edit',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@edit',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.update',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@update',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.group_settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.group_settings.destroy',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::qY9YVJtgq6Ppd9W9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/group_settings/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@bulk',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@bulk',
        'as' => 'api.generated::qY9YVJtgq6Ppd9W9',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.import.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportController@import',
        'controller' => 'App\\Http\\Controllers\\ImportController@import',
        'as' => 'api.import.import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.import.import_json' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/import_json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportJsonController@import',
        'controller' => 'App\\Http\\Controllers\\ImportJsonController@import',
        'as' => 'api.import.import_json',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.import.preimport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/preimport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportController@preimport',
        'controller' => 'App\\Http\\Controllers\\ImportController@preimport',
        'as' => 'api.import.preimport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.index',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.create',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.store',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.show',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.edit',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.update',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.delivery_note' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}/delivery_note',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@deliveryNote',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@deliveryNote',
        'as' => 'api.invoices.delivery_note',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@action',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@action',
        'as' => 'api.invoices.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/invoices/{invoice}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@upload',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@upload',
        'as' => 'api.invoices.upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoice/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'as' => 'api.invoices.downloadPdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.invoices.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/invoices/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@bulk',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@bulk',
        'as' => 'api.invoices.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoutController@index',
        'controller' => 'App\\Http\\Controllers\\LogoutController@index',
        'as' => 'api.logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.migrate.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@index',
        'controller' => 'App\\Http\\Controllers\\MigrationController@index',
        'as' => 'api.migrate.start',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::3F20tBO5G8mQz954' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migration/purge/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'as' => 'api.generated::3F20tBO5G8mQz954',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::onKsXMRbNjfXl2ot' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migration/purge_save_settings/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'as' => 'api.generated::onKsXMRbNjfXl2ot',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::g0Ie4OTs0jcJvvN2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migration/start',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@startMigration',
        'controller' => 'App\\Http\\Controllers\\MigrationController@startMigration',
        'as' => 'api.generated::g0Ie4OTs0jcJvvN2',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::qtWOd9opwdGXigWY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/one_time_token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\OneTimeTokenController@create',
        'controller' => 'App\\Http\\Controllers\\OneTimeTokenController@create',
        'as' => 'api.generated::qtWOd9opwdGXigWY',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.index',
        'uses' => 'App\\Http\\Controllers\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.create',
        'uses' => 'App\\Http\\Controllers\\PaymentController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.store',
        'uses' => 'App\\Http\\Controllers\\PaymentController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.show',
        'uses' => 'App\\Http\\Controllers\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/{payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.update',
        'uses' => 'App\\Http\\Controllers\\PaymentController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payments.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.refund' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments/refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@refund',
        'controller' => 'App\\Http\\Controllers\\PaymentController@refund',
        'as' => 'api.payments.refund',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payments.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@bulk',
        'controller' => 'App\\Http\\Controllers\\PaymentController@bulk',
        'as' => 'api.payments.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::uYNnJfpzdtNxDzqr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/payments/{payment}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@upload',
        'controller' => 'App\\Http\\Controllers\\PaymentController@upload',
        'as' => 'api.generated::uYNnJfpzdtNxDzqr',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.index',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.create',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payment_terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.store',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.show',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.update',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.payment_terms.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.payment_terms.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payment_terms/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@bulk',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@bulk',
        'as' => 'api.payment_terms.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.preview.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewController@show',
        'controller' => 'App\\Http\\Controllers\\PreviewController@show',
        'as' => 'api.preview.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.preview.live' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/live_preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewController@live',
        'controller' => 'App\\Http\\Controllers\\PreviewController@live',
        'as' => 'api.preview.live',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.index',
        'uses' => 'App\\Http\\Controllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\ProductController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.create',
        'uses' => 'App\\Http\\Controllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\ProductController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.store',
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.show',
        'uses' => 'App\\Http\\Controllers\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\ProductController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.edit',
        'uses' => 'App\\Http\\Controllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.update',
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.products.destroy',
        'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.products.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@bulk',
        'controller' => 'App\\Http\\Controllers\\ProductController@bulk',
        'as' => 'api.products.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::jOSnAF9J2lmUjRQn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/products/{product}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@upload',
        'controller' => 'App\\Http\\Controllers\\ProductController@upload',
        'as' => 'api.generated::jOSnAF9J2lmUjRQn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.index',
        'uses' => 'App\\Http\\Controllers\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.create',
        'uses' => 'App\\Http\\Controllers\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.store',
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.show',
        'uses' => 'App\\Http\\Controllers\\ProjectController@show',
        'controller' => 'App\\Http\\Controllers\\ProjectController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects/{project}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.edit',
        'uses' => 'App\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.update',
        'uses' => 'App\\Http\\Controllers\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.projects.destroy',
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/projects/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@bulk',
        'controller' => 'App\\Http\\Controllers\\ProjectController@bulk',
        'as' => 'api.projects.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.projects.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/projects/{project}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@upload',
        'controller' => 'App\\Http\\Controllers\\ProjectController@upload',
        'as' => 'api.projects.upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.index',
        'uses' => 'App\\Http\\Controllers\\QuoteController@index',
        'controller' => 'App\\Http\\Controllers\\QuoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.create',
        'uses' => 'App\\Http\\Controllers\\QuoteController@create',
        'controller' => 'App\\Http\\Controllers\\QuoteController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.store',
        'uses' => 'App\\Http\\Controllers\\QuoteController@store',
        'controller' => 'App\\Http\\Controllers\\QuoteController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.show',
        'uses' => 'App\\Http\\Controllers\\QuoteController@show',
        'controller' => 'App\\Http\\Controllers\\QuoteController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/{quote}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.edit',
        'uses' => 'App\\Http\\Controllers\\QuoteController@edit',
        'controller' => 'App\\Http\\Controllers\\QuoteController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.update',
        'uses' => 'App\\Http\\Controllers\\QuoteController@update',
        'controller' => 'App\\Http\\Controllers\\QuoteController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.quotes.destroy',
        'uses' => 'App\\Http\\Controllers\\QuoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\QuoteController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/{quote}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@action',
        'controller' => 'App\\Http\\Controllers\\QuoteController@action',
        'as' => 'api.quotes.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.quotes.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/quotes/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@bulk',
        'controller' => 'App\\Http\\Controllers\\QuoteController@bulk',
        'as' => 'api.quotes.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::k1r7OqCSvsNqTPRj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/quotes/{quote}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@upload',
        'controller' => 'App\\Http\\Controllers\\QuoteController@upload',
        'as' => 'api.generated::k1r7OqCSvsNqTPRj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.index',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.create',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.store',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.show',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.edit',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.update',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_expenses.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_expenses/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@bulk',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@bulk',
        'as' => 'api.recurring_expenses.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::tL7DwzhOVgA5stMV' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@upload',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@upload',
        'as' => 'api.generated::tL7DwzhOVgA5stMV',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.index',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.create',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.store',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.show',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.edit',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.update',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_invoices.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_invoices/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@bulk',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@bulk',
        'as' => 'api.recurring_invoices.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::OiI1l4aNVOOxZqsY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@upload',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@upload',
        'as' => 'api.generated::OiI1l4aNVOOxZqsY',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.index',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@index',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.create',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@create',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.store',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@store',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.show',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@show',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.edit',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@edit',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.update',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@update',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.recurring_quotes.destroy',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.recurring_quotes.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_quotes/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@bulk',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@bulk',
        'as' => 'api.recurring_quotes.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::zMc6KBZ3hyxqUfy4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@upload',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@upload',
        'as' => 'api.generated::zMc6KBZ3hyxqUfy4',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::gcC4aGw7tgUBrKmX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@refresh',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@refresh',
        'as' => 'api.generated::gcC4aGw7tgUBrKmX',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::sUXvusxEdEplsQAb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/scheduler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SchedulerController@index',
        'controller' => 'App\\Http\\Controllers\\SchedulerController@index',
        'as' => 'api.generated::sUXvusxEdEplsQAb',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::GnB6HDmz3eYbMhqQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/support/messages/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\Messages\\SendingController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Support\\Messages\\SendingController',
        'as' => 'api.generated::GnB6HDmz3eYbMhqQ',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::rB611ZltzDbsFTGg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/self-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\SelfUpdateController@update',
        'controller' => 'App\\Http\\Controllers\\SelfUpdateController@update',
        'as' => 'api.generated::rB611ZltzDbsFTGg',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::ps3re9g549e6GaZz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/self-update/check_version',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SelfUpdateController@checkVersion',
        'controller' => 'App\\Http\\Controllers\\SelfUpdateController@checkVersion',
        'as' => 'api.generated::ps3re9g549e6GaZz',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.index',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@index',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.create',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@create',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/system_logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.store',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@store',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs/{system_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.show',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@show',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs/{system_log}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.edit',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@edit',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/system_logs/{system_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.update',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@update',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.system_logs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/system_logs/{system_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.system_logs.destroy',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@destroy',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.index',
        'uses' => 'App\\Http\\Controllers\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\TaskController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.create',
        'uses' => 'App\\Http\\Controllers\\TaskController@create',
        'controller' => 'App\\Http\\Controllers\\TaskController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.store',
        'uses' => 'App\\Http\\Controllers\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\TaskController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.show',
        'uses' => 'App\\Http\\Controllers\\TaskController@show',
        'controller' => 'App\\Http\\Controllers\\TaskController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks/{task}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.edit',
        'uses' => 'App\\Http\\Controllers\\TaskController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.update',
        'uses' => 'App\\Http\\Controllers\\TaskController@update',
        'controller' => 'App\\Http\\Controllers\\TaskController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tasks.destroy',
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tasks.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tasks/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaskController@bulk',
        'as' => 'api.tasks.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::j8yZaZbTBKeCjk1A' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/tasks/{task}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@upload',
        'controller' => 'App\\Http\\Controllers\\TaskController@upload',
        'as' => 'api.generated::j8yZaZbTBKeCjk1A',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::BB1xny25xPe47z33' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tasks/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@sort',
        'controller' => 'App\\Http\\Controllers\\TaskController@sort',
        'as' => 'api.generated::BB1xny25xPe47z33',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.index',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@index',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.create',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@create',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/task_statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.store',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@store',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.show',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@show',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.edit',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.update',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@update',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.task_statuses.destroy',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.task_statuses.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/task_statuses/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@bulk',
        'as' => 'api.task_statuses.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.index',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@index',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.create',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@create',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tax_rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.store',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@store',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.show',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@show',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.edit',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@edit',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.update',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@update',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tax_rates.destroy',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tax_rates.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tax_rates/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaxRateController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@bulk',
        'as' => 'api.tax_rates.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TemplateController@show',
        'controller' => 'App\\Http\\Controllers\\TemplateController@show',
        'as' => 'api.templates.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.index',
        'uses' => 'App\\Http\\Controllers\\TokenController@index',
        'controller' => 'App\\Http\\Controllers\\TokenController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.create',
        'uses' => 'App\\Http\\Controllers\\TokenController@create',
        'controller' => 'App\\Http\\Controllers\\TokenController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.store',
        'uses' => 'App\\Http\\Controllers\\TokenController@store',
        'controller' => 'App\\Http\\Controllers\\TokenController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.show',
        'uses' => 'App\\Http\\Controllers\\TokenController@show',
        'controller' => 'App\\Http\\Controllers\\TokenController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens/{token}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.edit',
        'uses' => 'App\\Http\\Controllers\\TokenController@edit',
        'controller' => 'App\\Http\\Controllers\\TokenController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tokens/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.update',
        'uses' => 'App\\Http\\Controllers\\TokenController@update',
        'controller' => 'App\\Http\\Controllers\\TokenController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tokens/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.tokens.destroy',
        'uses' => 'App\\Http\\Controllers\\TokenController@destroy',
        'controller' => 'App\\Http\\Controllers\\TokenController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.tokens.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tokens/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TokenController@bulk',
        'controller' => 'App\\Http\\Controllers\\TokenController@bulk',
        'as' => 'api.tokens.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::vaGyMfkEjsKM5rcx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/settings/enable_two_factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwoFactorController@setupTwoFactor',
        'controller' => 'App\\Http\\Controllers\\TwoFactorController@setupTwoFactor',
        'as' => 'api.generated::vaGyMfkEjsKM5rcx',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::8pKhF8XaXIvdESGs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/settings/enable_two_factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwoFactorController@enableTwoFactor',
        'controller' => 'App\\Http\\Controllers\\TwoFactorController@enableTwoFactor',
        'as' => 'api.generated::8pKhF8XaXIvdESGs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::xm4wFFTaEWwLkkaA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/settings/disable_two_factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwoFactorController@disableTwoFactor',
        'controller' => 'App\\Http\\Controllers\\TwoFactorController@disableTwoFactor',
        'as' => 'api.generated::xm4wFFTaEWwLkkaA',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.index',
        'uses' => 'App\\Http\\Controllers\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\VendorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.create',
        'uses' => 'App\\Http\\Controllers\\VendorController@create',
        'controller' => 'App\\Http\\Controllers\\VendorController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.store',
        'uses' => 'App\\Http\\Controllers\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\VendorController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.show',
        'uses' => 'App\\Http\\Controllers\\VendorController@show',
        'controller' => 'App\\Http\\Controllers\\VendorController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors/{vendor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.edit',
        'uses' => 'App\\Http\\Controllers\\VendorController@edit',
        'controller' => 'App\\Http\\Controllers\\VendorController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.update',
        'uses' => 'App\\Http\\Controllers\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\VendorController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.vendors.destroy',
        'uses' => 'App\\Http\\Controllers\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\VendorController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.vendors.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vendors/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorController@bulk',
        'controller' => 'App\\Http\\Controllers\\VendorController@bulk',
        'as' => 'api.vendors.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::3b8B3rkQHC3wzuXY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/vendors/{vendor}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorController@upload',
        'controller' => 'App\\Http\\Controllers\\VendorController@upload',
        'as' => 'api.generated::3b8B3rkQHC3wzuXY',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::KlCj9EzEsPjoPfVj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'as' => 'api.generated::KlCj9EzEsPjoPfVj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::83Jh4yzoNCiSUZDb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'as' => 'api.generated::83Jh4yzoNCiSUZDb',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::1ajaqh8VEMgbG52c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'as' => 'api.generated::1ajaqh8VEMgbG52c',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::HoOwi8ppm65gXslP' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/users/{user}/detach_from_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@detach',
        'controller' => 'App\\Http\\Controllers\\UserController@detach',
        'as' => 'api.generated::HoOwi8ppm65gXslP',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.users.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@bulk',
        'controller' => 'App\\Http\\Controllers\\UserController@bulk',
        'as' => 'api.users.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::4m5ahVPQ8eL68ja5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/{user}/invite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@invite',
        'controller' => 'App\\Http\\Controllers\\UserController@invite',
        'as' => 'api.generated::4m5ahVPQ8eL68ja5',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::vU72UndA4W9rwm4o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/{user}/reconfirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@reconfirm',
        'controller' => 'App\\Http\\Controllers\\UserController@reconfirm',
        'as' => 'api.generated::vU72UndA4W9rwm4o',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.index',
        'uses' => 'App\\Http\\Controllers\\WebhookController@index',
        'controller' => 'App\\Http\\Controllers\\WebhookController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.create',
        'uses' => 'App\\Http\\Controllers\\WebhookController@create',
        'controller' => 'App\\Http\\Controllers\\WebhookController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/webhooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.store',
        'uses' => 'App\\Http\\Controllers\\WebhookController@store',
        'controller' => 'App\\Http\\Controllers\\WebhookController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks/{webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.show',
        'uses' => 'App\\Http\\Controllers\\WebhookController@show',
        'controller' => 'App\\Http\\Controllers\\WebhookController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks/{webhook}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.edit',
        'uses' => 'App\\Http\\Controllers\\WebhookController@edit',
        'controller' => 'App\\Http\\Controllers\\WebhookController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/webhooks/{webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.update',
        'uses' => 'App\\Http\\Controllers\\WebhookController@update',
        'controller' => 'App\\Http\\Controllers\\WebhookController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/webhooks/{webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.webhooks.destroy',
        'uses' => 'App\\Http\\Controllers\\WebhookController@destroy',
        'controller' => 'App\\Http\\Controllers\\WebhookController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.webhooks.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/webhooks/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\WebhookController@bulk',
        'controller' => 'App\\Http\\Controllers\\WebhookController@bulk',
        'as' => 'api.webhooks.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.stripe.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/update_payment_methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@update',
        'controller' => 'App\\Http\\Controllers\\StripeController@update',
        'as' => 'api.stripe.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.stripe.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/import_customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@import',
        'controller' => 'App\\Http\\Controllers\\StripeController@import',
        'as' => 'api.stripe.import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.stripe.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
          4 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@verify',
        'controller' => 'App\\Http\\Controllers\\StripeController@verify',
        'as' => 'api.stripe.verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.index',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.create',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@create',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.store',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.show',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@show',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.edit',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@edit',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.update',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@update',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'as' => 'api.subscriptions.destroy',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.subscriptions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/subscriptions/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@bulk',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@bulk',
        'as' => 'api.subscriptions.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'api.generated::DvwJZWmtRooMzjOT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/statics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_db',
          2 => 'token_auth',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticController@__invoke',
        'controller' => 'App\\Http\\Controllers\\StaticController',
        'as' => 'api.generated::DvwJZWmtRooMzjOT',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
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
      'withTrashed' => false,
    ),
    'payment_webhook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment_webhook/{company_key}/{company_gateway_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentWebhookController@__invoke',
        'controller' => 'App\\Http\\Controllers\\PaymentWebhookController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_webhook',
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
      'withTrashed' => false,
    ),
    'payment_notification_webhook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment_notification_webhook/{company_key}/{company_gateway_id}/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentNotificationWebhookController@__invoke',
        'controller' => 'App\\Http\\Controllers\\PaymentNotificationWebhookController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_notification_webhook',
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
      'withTrashed' => false,
    ),
    'generated::kPjLMoBfcF9BhfPB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/postmark_webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PostMarkController@webhook',
        'controller' => 'App\\Http\\Controllers\\PostMarkController@webhook',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kPjLMoBfcF9BhfPB',
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
      'withTrashed' => false,
    ),
    'generated::VtCd4sYHMhm16oB1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'token_hash_router',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\OneTimeTokenController@router',
        'controller' => 'App\\Http\\Controllers\\OneTimeTokenController@router',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VtCd4sYHMhm16oB1',
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
      'withTrashed' => false,
    ),
    'generated::QBiZIUwlq2SHzLyQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'webcron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\WebCronController@index',
        'controller' => 'App\\Http\\Controllers\\WebCronController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QBiZIUwlq2SHzLyQ',
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
      'withTrashed' => false,
    ),
    'generated::oNspOspVkDMpqSam' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/get_migration_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\HostedMigrationController@getAccount',
        'controller' => 'App\\Http\\Controllers\\HostedMigrationController@getAccount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oNspOspVkDMpqSam',
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
      'withTrashed' => false,
    ),
    'generated::B0t0zoYrYbdAcyNT' => 
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
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseController@notFoundClient',
        'controller' => 'App\\Http\\Controllers\\BaseController@notFoundClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B0t0zoYrYbdAcyNT',
      ),
      'fallback' => true,
      'defaults' => 
      array (
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
      'withTrashed' => false,
    ),
    'generated::M8PgPYsohvdVDiUs' => 
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
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseController@flutterRoute',
        'controller' => 'App\\Http\\Controllers\\BaseController@flutterRoute',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::M8PgPYsohvdVDiUs',
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
      'withTrashed' => false,
    ),
    'generated::iyzdofKHX0Y4Yclm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@index',
        'controller' => 'App\\Http\\Controllers\\SetupController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::iyzdofKHX0Y4Yclm',
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
      'withTrashed' => false,
    ),
    'generated::G5lQ2ZcuQIGgiVug' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@doSetup',
        'controller' => 'App\\Http\\Controllers\\SetupController@doSetup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::G5lQ2ZcuQIGgiVug',
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
      'withTrashed' => false,
    ),
    'generated::qE0hkV5JQyt884z9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@update',
        'controller' => 'App\\Http\\Controllers\\SetupController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qE0hkV5JQyt884z9',
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
      'withTrashed' => false,
    ),
    'generated::0Xj8ZwtTdTuf6Vp0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup/check_db',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@checkDB',
        'controller' => 'App\\Http\\Controllers\\SetupController@checkDB',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::0Xj8ZwtTdTuf6Vp0',
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
      'withTrashed' => false,
    ),
    'generated::y7RXPNDr9Rf1956P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup/check_mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@checkMail',
        'controller' => 'App\\Http\\Controllers\\SetupController@checkMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::y7RXPNDr9Rf1956P',
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
      'withTrashed' => false,
    ),
    'generated::KbgtdVhQYhQ9B9eC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup/check_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@checkPdf',
        'controller' => 'App\\Http\\Controllers\\SetupController@checkPdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KbgtdVhQYhQ9B9eC',
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
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
          2 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
      'withTrashed' => false,
    ),
    'wepay.signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wepay/signup/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WePayController@signup',
        'controller' => 'App\\Http\\Controllers\\WePayController@signup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'wepay.signup',
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
      'withTrashed' => false,
    ),
    'wepay.finished' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wepay/finished',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WePayController@finished',
        'controller' => 'App\\Http\\Controllers\\WePayController@finished',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'wepay.finished',
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
      'withTrashed' => false,
    ),
    'generated::rKEFfeCmIdsofALT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToProvider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::rKEFfeCmIdsofALT',
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
      'withTrashed' => false,
    ),
    'generated::EKPfsWTrOiCBAZZs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm/{confirmation_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'url_db',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@confirm',
        'controller' => 'App\\Http\\Controllers\\UserController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::EKPfsWTrOiCBAZZs',
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
      'withTrashed' => false,
    ),
    'generated::XGcNAfJMP3tRf1RJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm/{confirmation_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'url_db',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@confirmWithPassword',
        'controller' => 'App\\Http\\Controllers\\UserController@confirmWithPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::XGcNAfJMP3tRf1RJ',
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
      'withTrashed' => false,
    ),
    'stripe_connect.initialization' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/signup/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeConnectController@initialize',
        'controller' => 'App\\Http\\Controllers\\StripeConnectController@initialize',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'stripe_connect.initialization',
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
      'withTrashed' => false,
    ),
    'stripe_connect.return' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/completed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeConnectController@completed',
        'controller' => 'App\\Http\\Controllers\\StripeConnectController@completed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'stripe_connect.return',
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
      'withTrashed' => false,
    ),
    'checkout.3ds_redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/3ds_redirect/{company_key}/{company_gateway_id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateways\\Checkout3dsController@index',
        'controller' => 'App\\Http\\Controllers\\Gateways\\Checkout3dsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'checkout.3ds_redirect',
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
      'withTrashed' => false,
    ),
    'mollie.3ds_redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mollie/3ds_redirect/{company_key}/{company_gateway_id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateways\\Mollie3dsController@index',
        'controller' => 'App\\Http\\Controllers\\Gateways\\Mollie3dsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'mollie.3ds_redirect',
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
      'withTrashed' => false,
    ),
    'generated::tFKWV1JkzKj76H8o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/contact/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'contact',
          1 => 'api_secret_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\LoginController@apiLogin',
        'controller' => 'App\\Http\\Controllers\\Contact\\LoginController@apiLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tFKWV1JkzKj76H8o',
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
      'withTrashed' => false,
    ),
    'api.contact.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/contact/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'contact',
          1 => 'contact_db',
          2 => 'api_secret_check',
          3 => 'contact_token_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\InvoiceController@index',
        'as' => 'api.contact.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1/contact',
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
      'withTrashed' => false,
    ),
    'client.catchall' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.catchall',
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
      'withTrashed' => false,
    ),
    'client.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login',
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
      'withTrashed' => false,
    ),
    'client.login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login.submit',
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
      'withTrashed' => false,
    ),
    'client.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/register/{company_key?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'contact_register',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@showRegisterForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@showRegisterForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.register',
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
      'withTrashed' => false,
    ),
    'generated::fGQAs5vBvtcA1HHu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/register/{company_key?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'contact_register',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fGQAs5vBvtcA1HHu',
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
      'withTrashed' => false,
    ),
    'client.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.request',
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
      'withTrashed' => false,
    ),
    'client.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.email',
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
      'withTrashed' => false,
    ),
    'client.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.reset',
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
      'withTrashed' => false,
    ),
    'client.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.update',
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
      'withTrashed' => false,
    ),
    'client.entity_view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/{entity_type}/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.entity_view',
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
      'withTrashed' => false,
    ),
    'client.entity_view.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/{entity_type}/{invitation_key}/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@password',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.entity_view.password',
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
      'withTrashed' => false,
    ),
    'generated::dOU2sbqWc5HS969W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'view/{entity_type}/{invitation_key}/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@handlePassword',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@handlePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dOU2sbqWc5HS969W',
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
      'withTrashed' => false,
    ),
    'tmp_pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tmp_pdf/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\TempRouteController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\TempRouteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tmp_pdf',
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
      'withTrashed' => false,
    ),
    'client.contact_login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/key_login/{contact_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@login',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact_login',
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
      'withTrashed' => false,
    ),
    'client.contact_magic_link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/magic_link/{magic_link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@magicLink',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@magicLink',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact_magic_link',
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
      'withTrashed' => false,
    ),
    'documents.public_download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'documents/{document_hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'document_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@publicDownload',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@publicDownload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'documents.public_download',
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
      'withTrashed' => false,
    ),
    'client.error' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'error',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@errorPage',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@errorPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.error',
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
      'withTrashed' => false,
    ),
    'generated::58rdKPZTHQkyeshQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment/{contact_key}/{payment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@paymentRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@paymentRouter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::58rdKPZTHQkyeshQ',
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
      'withTrashed' => false,
    ),
    'client.ninja_contact_login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/ninja/{contact_key}/{company_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.ninja_contact_login',
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
      'withTrashed' => false,
    ),
    'client.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DashboardController@index',
        'as' => 'client.dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@index',
        'as' => 'client.invoices.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.invoices.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/invoices/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@bulk',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@bulk',
        'as' => 'client.invoices.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'as' => 'client.invoice.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.invoice.show_invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices/{invoice_invitation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'as' => 'client.invoice.show_invitation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.recurring_invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@index',
        'as' => 'client.recurring_invoices.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.recurring_invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@show',
        'as' => 'client.recurring_invoice.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.recurring_invoices.request_cancellation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoices/{recurring_invoice}/request_cancellation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@requestCancellation',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@requestCancellation',
        'as' => 'client.recurring_invoices.request_cancellation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payments.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payments/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@process',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@process',
        'as' => 'client.payments.process',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payments.credit_response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payments/credit_response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@credit_response',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@credit_response',
        'as' => 'client.payments.credit_response',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@index',
        'as' => 'client.payments.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@show',
        'as' => 'client.payments.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payments.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payments/process/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'as' => 'client.payments.response',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payments.response.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payments/process/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'as' => 'client.payments.response.get',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/profile/{client_contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@edit',
        'as' => 'client.profile.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'client/profile/{client_contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@update',
        'as' => 'client.profile.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.profile.edit_client' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'client/profile/{client_contact}/edit_client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClient',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClient',
        'as' => 'client.profile.edit_client',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.profile.edit_localization' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'client/profile/{client_contact}/localization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClientLocalization',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClientLocalization',
        'as' => 'client.profile.edit_localization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/{payment_method}/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@verify',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@verify',
        'as' => 'client.payment_methods.verification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payment_methods/{payment_method}/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@processVerification',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@processVerification',
        'as' => 'client.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'as' => 'client.payment_methods.confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.payment_methods.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.payment_methods.create',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@create',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payment_methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.payment_methods.store',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.payment_methods.show',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.payment_methods.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'client/payment_methods/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.payment_methods.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.quotes.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'client/quotes/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@bulk',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@bulk',
        'as' => 'client.quotes.bulk',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@index',
        'as' => 'client.quotes.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.quote.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'as' => 'client.quote.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.quote.show_invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quotes/{quote_invitation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'as' => 'client.quote.show_invitation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.credits.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@index',
        'as' => 'client.credits.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.credit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'as' => 'client.credit.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.credits.show_invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credits/{credit_invitation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'as' => 'client.credits.show_invitation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.switch_company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/client/switch_company/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SwitchCompanyController@__invoke',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SwitchCompanyController',
        'as' => 'client.switch_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.documents.download_multiple' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/documents/download_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@downloadMultiple',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@downloadMultiple',
        'as' => 'client.documents.download_multiple',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.documents.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/documents/{document}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@download',
        'as' => 'client.documents.download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.documents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.documents.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.documents.show',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.subscription.plan_switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions/{recurring_invoice}/plan_switch/{target}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPlanSwitchController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPlanSwitchController@index',
        'as' => 'client.subscription.plan_switch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
          5 => 'portal_enabled',
        ),
        'as' => 'client.subscriptions.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.tasks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'as' => 'client.tasks.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\TaskController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.statement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/statement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@index',
        'as' => 'client.statement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.statement.raw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/statement/raw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@raw',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@raw',
        'as' => 'client.statement.raw',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.upload.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\UploadController@__invoke',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\UploadController',
        'as' => 'client.upload.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'check_client_existence',
          4 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@logout',
        'as' => 'client.logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.subscription.purchase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions/{subscription}/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPurchaseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.subscription.purchase',
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
      'withTrashed' => false,
    ),
    'client.generated::13DpDmBMWrAZ6Gkp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoice/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@recurringRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@recurringRouter',
        'as' => 'client.generated::13DpDmBMWrAZ6Gkp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.generated::TXP48fYr9fp6sH4H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoice/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@invoiceRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@invoiceRouter',
        'as' => 'client.generated::TXP48fYr9fp6sH4H',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.generated::77kdUvP8aSuQMxzS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quote/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@quoteRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@quoteRouter',
        'as' => 'client.generated::77kdUvP8aSuQMxzS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.generated::GsexX3pjNdNVrcwD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credit/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@creditRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@creditRouter',
        'as' => 'client.generated::GsexX3pjNdNVrcwD',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.recurring_invoice.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoice/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@downloadPdf',
        'as' => 'client.recurring_invoice.download_invitation_key',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.invoice.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoice/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'as' => 'client.invoice.download_invitation_key',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.quote.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quote/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\QuoteController@downloadPdf',
        'as' => 'client.quote.download_invitation_key',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.credit.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credit/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\CreditController@downloadPdf',
        'as' => 'client.credit.download_invitation_key',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.generated::NCVvmgwHu255yBcJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/{entity}/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@routerForDownload',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@routerForDownload',
        'as' => 'client.generated::NCVvmgwHu255yBcJ',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'client.pay.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/pay/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@payInvoice',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@payInvoice',
        'as' => 'client.pay.invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
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
      'withTrashed' => false,
    ),
    'phantom_view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phantom/{entity}/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
          2 => 'phantom_secret',
        ),
        'uses' => '\\App\\Utils\\PhantomJS\\Phantom@displayInvitation',
        'controller' => '\\App\\Utils\\PhantomJS\\Phantom@displayInvitation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'phantom_view',
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
      'withTrashed' => false,
    ),
    'generated::dCgQGrvV0NnapE3a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Shop\\ProductController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dCgQGrvV0NnapE3a',
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
      'withTrashed' => false,
    ),
    'generated::Z3W3uqwZ1t3ydujq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/shop/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\Shop\\ClientController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3W3uqwZ1t3ydujq',
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
      'withTrashed' => false,
    ),
    'generated::i2Zcox8GQBDiMsTp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/shop/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\Shop\\InvoiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::i2Zcox8GQBDiMsTp',
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
      'withTrashed' => false,
    ),
    'generated::1OQJ27WbP6D8SIvM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/client/{contact_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\ClientController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::1OQJ27WbP6D8SIvM',
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
      'withTrashed' => false,
    ),
    'generated::6gozFxOsJDivRj9t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/invoice/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\InvoiceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6gozFxOsJDivRj9t',
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
      'withTrashed' => false,
    ),
    'generated::cFMZ0qDtJ7GfFnR7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/product/{product_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\ProductController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cFMZ0qDtJ7GfFnR7',
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
      'withTrashed' => false,
    ),
    'generated::N6go6flW4YUobB0I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ProfileController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\ProfileController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::N6go6flW4YUobB0I',
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
      'withTrashed' => false,
    ),
  ),
)
);
