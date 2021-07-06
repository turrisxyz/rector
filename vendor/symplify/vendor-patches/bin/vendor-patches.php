<?php

declare (strict_types=1);
namespace RectorPrefix20210706;

use RectorPrefix20210706\Symplify\SymplifyKernel\ValueObject\KernelBootAndApplicationRun;
use RectorPrefix20210706\Symplify\VendorPatches\HttpKernel\VendorPatchesKernel;
$possibleAutoloadPaths = [__DIR__ . '/../autoload.php', __DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php', __DIR__ . '/../../../vendor/autoload.php'];
foreach ($possibleAutoloadPaths as $possibleAutoloadPath) {
    if (!\file_exists($possibleAutoloadPath)) {
        continue;
    }
    require_once $possibleAutoloadPath;
}
$kernelBootAndApplicationRun = new \RectorPrefix20210706\Symplify\SymplifyKernel\ValueObject\KernelBootAndApplicationRun(\RectorPrefix20210706\Symplify\VendorPatches\HttpKernel\VendorPatchesKernel::class);
$kernelBootAndApplicationRun->run();
