<?php

/**
 * Environment config
 *
 * Advanced environment configuration specifically for multiple-environment
 * deployments. More information on Craft multiple-environment deployments visit
 * the following URL: http://buildwithcraft.com/docs/multi-environment-configs
 *
 * @author    Jason McCallister
 * @link      http://themccallister.com/blog/craft-environment-bootstrap
 */

return array(

    // ASSETS

    'APP_GENERATE_TRANSFORMS_BEFORE_PAGE_LOAD'    => false,
    'APP_IMAGE_DRIVER'                            => null,
    'APP_DEFAULT_IMAGE_QUALITY'                   => 75,
    'APP_EXTRA_ALLOWED_FILE_EXTENSIONS'           => '',
    'APP_MAX_CACHED_CLOUD_IMAGE_SIZE'             => 2000,
    'APP_MAX_FILE_UPLOAD_SIZE'                    => 16777216,

    // DATABASE

    'APP_DB_DATABASE'                             => 'myNewCraftSite',
    'APP_DB_PASSWORD'                             => 'MyPassword',
    'APP_DB_SERVER'                               => 'localhost',
    'APP_DB_TABLE_PREFIX'                         => 'craft',
    'APP_DB_USER'                                 => 'username',

    // MISC

    'APP_ALLOW_AUTO_UPDATES'                      => true,
    'APP_ALLOW_UPPERCASE_IN_SLUG'                 => false,
    'APP_BACKUP_DB_ON_UPDATE'                     => true,
    'APP_CACHE_DURATION'                          => 'P1D',
    'APP_CACHE_METHOD'                            => 'file',
    'APP_CUSTOM_ASCII_CHAR_MAPPINGS'              => null,
    'APP_DEFAULT_FOLDER_PERMISSIONS'              => 0775,
    'APP_DEFAULT_TOKEN_DURATION'                  => 'P1D',
    'APP_DEV_MODE'                                => false,
    'APP_IS_SYSTEM_ON'                            => null,
    'APP_OVERRIDE_PHP_SESSION_LOCATION'           => 'auto',
    'APP_PHP_MAX_MEMORY_LIMIT'                    => '256M',
    'APP_PHP_PASS_ITERATION_COUNT'                => 8,
    'APP_RESTORE_DB_ON_UPDATE_FAILURE'            => true,
    'APP_TRANSLATION_DEBUG_OUTPUT'                => false,
    'APP_TOKEN_PARAM'                             => "token",
    'APP_USE_COMPRESSED_JS'                       => true,
    'APP_USE_X_SEND_FILE'                         => false,
    'APP_WRITABLE_FILE_PERMISSIONS'               => 0777,
    'APP_WRITABLE_FOLDER_PERMISSIONS'             => 0777,

    // TEMPLATING

    'APP_ERROR_TEMPLATE_PREFIX'                   => '_errors',
    'APP_PRIVATE_TEMPLATE_TRIGGER'                => "_",

    // URLS

    'APP_ACTION_TRIGGER'                          => 'action',
    'APP_ADD_TRAILING_SLASHES'                    => false,
    'APP_BASE_CP_URL'                             => null,
    'APP_CP_TRIGGER'                              => 'admin',
    'APP_OMIT_SCRIPT_NAMES_IN_URL'                => 'auto',
    'APP_PAGE_TRIGGER'                            => 'p',
    'APP_RESOURCE_TRIGGER'                        => 'cpresources',
    'APP_SITE_URL'                                => null,
    'APP_SLUG_WORD_SEPARATOR'                     => "-",
    'APP_USE_PATH_INFO'                           => 'auto',

    // USERS

    'APP_ACTIVATE_ACCOUNT_FAILURE_PATH'           => null,
    'APP_ACTIVATE_ACCOUNT_SUCCESS_PATH'           => null,
    'APP_AUTO_LOGIN_AFTER_ACCOUNT_ACTIVATION'     => false,
    'APP_BLOWFISH_HAS_COST'                       => 13,
    'APP_COOL_DOWN_DURATION'                      => 'PT5M',
    'APP_INVALID_LOGIN_WINDOWS_DURATION'          => 'PT1H',
    'APP_LOGIN_PATH'                              => 'login',
    'APP_LOGOUT_PATH'                             => 'logout',
    'APP_MAX_INVALID_LOGINS'                      => 5,
    'APP_PURGE_PENDING_USERS_DURATION'            => 'P3M',
    'APP_REMEMBER_USERNAME_DURATION'              => 'P1Y',
    'APP_REMEMBERED_USER_SESSION_DURATION'        => '',
    'APP_REQUIRE_MATCHING_USER_AGENT_FOR_SESSION' => true,
    'APP_REQUIRE_USER_AGENT_AND_IP_FOR_SESSION'   => true,
    'APP_SET_PASSWORD_PATH'                       => 'setPassword',
    'APP_SET_PASSWORD_SUCCESS_PATH'               => '',
    'APP_TEST_TO_EMAIL_ADDRESS'                   => null,
    'APP_USE_EMAIL_AS_USERNAME'                   => false,
    'APP_USER_SESSION_DURATION'                   => 'PT1H',
    'APP_VERIFICATION_CODE_DURATION'              => 'P1D',

);
