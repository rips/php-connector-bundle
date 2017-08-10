RIPS Connector Bundle
---

A symfony bundle wrapper around RIPS-Connector package

# Installation

Update composer.json to read from the public RIPS repository

	"repositories": [
        {
            "type": "vcs",
            "url": "https://source.internal.ripstech.com/scm/rac/php-connector.git"
        },
        {
            "type": "vcs",
            "url": "https://source.internal.ripstech.com/scm/rac/php-connector-bundle.git"
        }
    ],

Use composer to include the package:

	composer require rips/connector-bundle:dev-dev

OR add to composer.json and run `composer update`

	"rips/connector-bundle": "dev-dev"

Add the config settings in `app/config/config.yml` (see rips/connector readme for list of config options)

	rips_connector:
		base_url: 'http://localhost:8000'
		username: 'username'
		password: 'password'

Declare the bundle in your `AppKernal.php` file

	$bundles = [
		// ...
		new RIPS\ConnectorBundle\RIPSConnectorBundle(),	
		// ...	
	];

# Usage

Example of getting a collection of users in controller:


	// ...
	use RIPS\ConnectorBundle\Services\UserService;
	use RIPS\Connector\Exceptions\ClientException;
	use RIPS\Connector\Exceptions\ServerExecption;

	class DefaultController extends Controller
	{
		// @var UserService
		protected $userService;

		public function __construct(UserService $userService)
		{
			$this->userService = $userService;
		}
		
		public function indexAction()
		{
			try {
				$users = $this->userService->getAll();
			} catch (ClientException $e) {
				// 4** error
			} catch (ServerException $e) {
				// 5** error
			}

			return $this->render('default/index.html.twig', ['users' => $users]);
		}
	}
