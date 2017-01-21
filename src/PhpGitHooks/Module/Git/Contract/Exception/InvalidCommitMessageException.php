<?php

namespace PhpGitHooks\Module\Git\Contract\Exception;

class InvalidCommitMessageException extends \Exception
{
    protected $message = 'Invalid Commit message: commit message not matching the requested style of the project.';
}
