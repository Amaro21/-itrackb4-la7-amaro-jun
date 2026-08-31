Q1: Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

Answer: I put my featured route above my detail route since Laravel checks routes top to bottom and stop at the first match so putting the wildcard placed above a literal will swallow it. Swapping them will cause featured page broken and give me a 404 NOT FOUND if I try to go to featured page because detail route will be swallowed the featured route and thinking the featured is id, since I do not have featured id at my movie array it will trigger the abort(404). 

Q2: What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

Answer: When someone visits an id that does not exist in my data they will see a 404 NOT FOUND in the screen. To make it happen I write if(!isset($movies[$id])) { abort(404); } in my MovieController.

Q3: Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

Answer: I used route names instead of typed URL since route name act like a permanent nickname of my route and this is a good practice in routing because if I used typed URL instead of route names changing actual URL in the future will be hard, I also need to change the typed URL to make it work and that is not a good practice and we need to avoid that. Forgive me for my bad English sir.
