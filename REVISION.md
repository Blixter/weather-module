## v1.0.7 (2019-12-09)

-   Refactored WeatherMock.php for having too many lines of code.

## v1.0.6 (2019-12-07)

-   Removed an echo used for debugging.

## v1.0.5 (2019-12-07)

-   Added new config files for testing.
-   Updated view files to use sample apikeys for testing.
-   Updated model and controllers to work when coordinate-variables are not set - for testing.
-   Added test for newer PHP versions in travis-config.
-   Added config-file for CircleCI.
-   Added badges to README.

## v1.0.4 (2019-12-02)

-   Updated README.me
-   Updated Composer.json

## v1.0.3 (2019-12-01)

-   Fixed validation errors.

## v1.0.2 (2019-12-01)

-   Changed mock API url to use online version instead of local.

## v1.0.1 (2019-12-01)

-   Updated the tests to use cache in test/cache.

## v1.0.0 (2019-12-01)

-   Added all my models to di.
-   Updated the path for my controllers.
-   Updated the controllers to read models from di.
-   Changed the namespace path.
-   Added an installation script.
-   Added tests with a test environment.
-   Created a mock API used for testing, and mounted it.
