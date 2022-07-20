<?php

/**
 * @generate-function-entries
 * @generate-class-entries
 */

/**
 * @var int
 * @cvalue XATTR_CREATE
 */
const XATTR_CREATE = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_REPLACE
 */
const XATTR_REPLACE = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_DONTFOLLOW
 */
const XATTR_DONTFOLLOW = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_USER
 */
const XATTR_USER = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_ROOT
 */
const XATTR_ROOT = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_TRUSTED
 */
const XATTR_TRUSTED = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_SYSTEM
 */
const XATTR_SYSTEM = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_SECURITY
 */
const XATTR_SECURITY = UNKNOWN;

/**
 * @var int
 * @cvalue XATTR_ALL
 */
const XATTR_ALL = UNKNOWN;


function xattr_set(string $path, string $name, string $value, int $flag = 0): bool {}

#if PHP_MAJOR_VERSION < 8
function xattr_get(string $path, string $name, int $flags = 0): string {}
#else
function xattr_get(string $path, string $name, int $flags = 0): string|false {}
#endif

function xattr_supported(string $path, int $flags = 0): bool {}

function xattr_remove(string $path, string $name, int $flags = 0): bool {}

#if PHP_MAJOR_VERSION < 8
function xattr_list(string $path, int $flags = 0): array {}
#else
function xattr_list(string $path, int $flags = 0): array|false {}
#endif

