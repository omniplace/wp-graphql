<?php
declare(strict_types=1);

namespace WPGraphQL\Benchmarks;


/**
 * @BeforeMethods({"setUp"})
 * @OutputTimeUnit("milliseconds", precision=3)
 * @Warmup(1)
 * @Revs(5)
 * @Iterations(1)
 */
class QueryBench {

	public function setUp():void {

	}

	public function benchSchema() {

		sleep( 1 );
		$actual = graphql(['query'=> '{posts{nodes{id}}}']);

	}
}
