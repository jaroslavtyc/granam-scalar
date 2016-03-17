<?php
namespace Granam\Tests\Scalar;

use Granam\Tests\Exceptions\Tools\AbstractExceptionsHierarchyTest;

class ExceptionsHierarchyTest extends AbstractExceptionsHierarchyTest
{
    protected function getTestedNamespace()
    {
        return $this->getRootNamespace();
    }

    protected function getRootNamespace()
    {
        return str_replace('\Tests', '', __NAMESPACE__);
    }

    protected function getExternalRootNamespace()
    {
        $externalRootReflection = new \ReflectionClass('\Granam\Exceptions\Exception');

        return $externalRootReflection->getNamespaceName();
    }

    protected function getExternalRootExceptionsSubDir()
    {
        return false;
    }

}
