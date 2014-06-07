<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

// Import the environment variables file path
$env = require(dirname(dirname(__FILE__)).'/../.env.php');

return array(

    // ASSETS

    'generateTransformsBeforePageLoad'  => $env['APP_GENERATE_TRANSFORMS_BEFORE_PAGE_LOAD'],
    'imageDriver'                       => $env['APP_IMAGE_DRIVER'],
    'defaultImageQuality'               => $env['APP_DEFAULT_IMAGE_QUALITY'],
    'extraAllowedFileExtensions'        => $env['APP_EXTRA_ALLOWED_FILE_EXTENSIONS'],
    'maxCachedCloudImageSize'           => $env['APP_MAX_CACHED_CLOUD_IMAGE_SIZE'],
    'maxFileUploadSize'                 => $env['APP_MAX_FILE_UPLOAD_SIZE'],

    // MISC

    'allowAutoUpdates'                  => $env['APP_ALLOW_AUTO_UPDATES'],
    'allowUppercaseInSlug'              => $env['APP_ALLOW_UPPERCASE_IN_SLUG'],
    'backupDbOnUpdate'                  => $env['APP_BACKUP_DB_ON_UPDATE'],
    'cacheDuration'                     => $env['APP_CACHE_DURATION'],
    'cacheMethod'                       => $env['APP_CACHE_METHOD'],
    'customAsciiCharMappings'           => $env['APP_CUSTOM_ASCII_CHAR_MAPPINGS'],
    'defaultFolderPermissions'          => $env['APP_DEFAULT_FOLDER_PERMISSIONS'],
    'defaultTokenDuration'              => $env['APP_DEFAULT_TOKEN_DURATION'],
    'devMode'                           => $env['APP_DEV_MODE'],
    'isSystemOn'                        => $env['APP_IS_SYSTEM_ON'],
    'overridePhpSessionLocation'        => $env['APP_OVERRIDE_PHP_SESSION_LOCATION'],
    'phpMaxMemoryLimit'                 => $env['APP_PHP_MAX_MEMORY_LIMIT'],
    'phpPass-iterationCount'            => $env['APP_PHP_PASS_ITERATION_COUNT'],
    'restoreDbOnUpdateFailure'          => $env['APP_RESTORE_DB_ON_UPDATE_FAILURE'],
    'translationDebugOutput'            => $env['APP_TRANSLATION_DEBUG_OUTPUT'],
    'tokenParam'                        => $env['APP_TOKEN_PARAM'],
    'useCompressedJs'                   => $env['APP_USE_COMPRESSED_JS'],
    'useXSendFile'                      => $env['APP_USE_X_SEND_FILE'],
    'writableFilePermissions'           => $env['APP_WRITABLE_FILE_PERMISSIONS'],
    'writableFolderPermissions'         => $env['APP_WRITABLE_FOLDER_PERMISSIONS'],

    // TEMPLATING

    'errorTemplatePrefix'               => $env['APP_ERROR_TEMPLATE_PREFIX'],
    'privateTemplateTrigger'            => $env['APP_PRIVATE_TEMPLATE_TRIGGER'],

    // URLS

    'actionTrigger'                      => $env['APP_ACTION_TRIGGER'],
    'addTrailingSlashesToUrls'           => $env['APP_ADD_TRAILING_SLASHES'],
    'baseCpUrl'                          => $env['APP_BASE_CP_URL'],
    'cpTrigger'                          => $env['APP_CP_TRIGGER'],
    'omitScriptNameInUrls'               => $env['APP_OMIT_SCRIPT_NAMES_IN_URL'],
    'pageTrigger'                        => $env['APP_PAGE_TRIGGER'],
    'resourceTrigger'                    => $env['APP_RESOURCE_TRIGGER'],
    'siteUrl'                            => $env['APP_SITE_URL'],
    'slugWordSeparator'                  => $env['APP_SLUG_WORD_SEPARATOR'],
    'usePathInfo'                        => $env['APP_USE_PATH_INFO'],

    // USERS

    'activateAccountFailurePath'         => $env['APP_ACTIVATE_ACCOUNT_FAILURE_PATH'],
    'activateAccountSuccessPath'         => $env['APP_ACTIVATE_ACCOUNT_SUCCESS_PATH'],
    'autoLoginAfterAccountActivation'    => $env['APP_AUTO_LOGIN_AFTER_ACCOUNT_ACTIVATION'],
    'blowfishHashCost'                   => $env['APP_BLOWFISH_HAS_COST'],
    'cooldownDuration'                   => $env['APP_COOL_DOWN_DURATION'],
    'invalidLoginWindowDuration'         => $env['APP_INVALID_LOGIN_WINDOWS_DURATION'],
    'loginPath'                          => $env['APP_LOGIN_PATH'],
    'logoutPath'                         => $env['APP_LOGOUT_PATH'],
    'maxInvalidLogins'                   => $env['APP_MAX_INVALID_LOGINS'],
    'purgePendingUsersDuration'          => $env['APP_PURGE_PENDING_USERS_DURATION'],
    'rememberUsernameDuration'           => $env['APP_REMEMBER_USERNAME_DURATION'],
    'rememberedUserSessionDuration'      => $env['APP_REMEMBERED_USER_SESSION_DURATION'],
    'requireMatchingUserAgentForSession' => $env['APP_REQUIRE_MATCHING_USER_AGENT_FOR_SESSION'],
    'requireUserAgentAndIpForSession'    => $env['APP_REQUIRE_USER_AGENT_AND_IP_FOR_SESSION'],
    'setPasswordPath'                    => $env['APP_SET_PASSWORD_PATH'],
    'setPasswordSuccessPath'             => $env['APP_SET_PASSWORD_SUCCESS_PATH'],
    'testToEmailAddress'                 => $env['APP_TEST_TO_EMAIL_ADDRESS'],
    'useEmailAsUsername'                 => $env['APP_USE_EMAIL_AS_USERNAME'],
    'userSessionDuration'                => $env['APP_USER_SESSION_DURATION'],
    'verificationCodeDuration'           => $env['APP_VERIFICATION_CODE_DURATION'],


);
