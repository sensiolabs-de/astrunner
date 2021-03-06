<?php 

namespace Tests\SensioLabs\AstRunner\Visitor\Fixtures\BasicDependency;

trait BasicDependencyTraitA {}
trait BasicDependencyTraitB {}
trait BasicDependencyTraitC { use BasicDependencyTraitB; }

trait BasicDependencyTraitD {
    use BasicDependencyTraitA;
    use BasicDependencyTraitB;
}

class BasicDependencyTraitClass {
    use BasicDependencyTraitA;
}
