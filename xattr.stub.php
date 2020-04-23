<?php

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

