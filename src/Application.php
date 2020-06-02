<?php declare(strict_types=1);
/**
 * @author   Fung Wing Kit <wengee@gmail.com>
 * @version  2020-06-02 11:51:23 +0800
 */

namespace fwkit\Console;

use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Application extends SymfonyApplication
{
    public function doRun(InputInterface $input, OutputInterface $output)
    {
        $this->welcome($input, $output);
        return parent::doRun($input, $output);
    }

    protected function welcome(InputInterface $input, OutputInterface $output): void
    {
    }
}
