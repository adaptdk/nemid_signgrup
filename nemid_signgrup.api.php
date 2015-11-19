<?php
/**
 * @file
 * NemID Signaturgruppen API.
 */

/**
 * Callback if NemID authentication succeeded.
 *
 * @param object $nemid_info
 *   Authentication info object.
 * @param string $message
 *   Message that can be exposed for users. Use it or write your own.
 */
function hook_nemid_signgrup_callback_success($nemid_info, $message) {

}

/**
 * Callback if NemID authentication failed.
 *
 * @param object $nemid_info
 *   Authentication info object.
 * @param string $message
 *   Message that can be exposed for users. Use it or write your own.
 */
function hook_nemid_signgrup_callback_failure($message) {

}

/**
 * Callback if user cancelled NemID authentication.
 *
 * @param object $nemid_info
 *   Authentication info object.
 * @param string $message
 *   Message that can be exposed for users. Use it or write your own.
 */
function hook_nemid_signgrup_callback_user_cancel($message) {

}