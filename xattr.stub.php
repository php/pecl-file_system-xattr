<?php

function xattr_set(string $path, string $name, string $value, int $flag = 0): ?bool {}

function xattr_get(string $path, string $name, int $flags = 0): ?string {}

function xattr_supported(string $path, int $flags = 0): ?bool {}

function xattr_remove(string $path, string $name, int $flags = 0): ?bool {}

function xattr_list(string $path, int $flags = 0): ?array {}

