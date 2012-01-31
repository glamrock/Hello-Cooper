<?php
/*
Plugin Name: Hello Cooper
Plugin URI: http://saints-archive.com/projects/plugins.html
Description: There's a fish in the percolator.
Author: Griffin S. Boyce
Version: 1.0
Author URI: http://saints-archive.com/
*/

// INSTRUCTIONS
// One quote per line
// 50 characters max
// Commas and apostrophes are okay
// This really only works with one-liners

$lyrics = "There's a fish in the percolator
Damn fine coffee... and hot!
This must be where pies go when they die
Black as midnight on a moonless night
Perhaps I should consider moderating my nighttime coffee consumption
Diane, last night I dreamed I was eating a large, tasteless gumdrop
Every day, once a day, give yourself a present
I have a definite feeling it will be a place both wonderful and strange
In the grand design, women were definitely drawn from a different set of blueprints
It looks like the sign up at Owl Cave
How long have you been in love with her?
The only thing Columbus discovered was that he was lost! 
Jelly donuts? 
Harry, that goes without saying. 
Nobody loved Laura. Just us. 
It's not the first time, it won't be the last, but I'm in that doghouse again
Harry, you're all right. 
I smoke every once and a while. Helps relieve tension
My log saw something that night
One day my log will have something to say about this
Maybe we'd better just whistle our way past the graveyard
Twenty four hour room service must be one of the premier achievements of modern civilization
Harry, the last thing I want you to worry while I'm here is some city slicker relieving himself upstream
Shut your eyes and you'll burst into flames
Harry, I'm going to let you in on a little secret
Look at that. Ducks...on a lake!
Gentlemen, when two separate events occur simultaneously pertaining to the same object of inquiry, we must always pay strict attention
Where we're from, the birds sing a pretty song and there's always music in the air
She's filled with secrets
I do not suffer fools gladly and fools with badges never
Excuse me. Is there something wrong, young, pretty girl?
Leo needs a new pair of shoes
He is BOB! Eager for fun! He wears a smile. EVERYBODY RUN
All men in the world should be taken to a desert island and forced to eat sand!
I PLAN ON WRITING AN EPIC POEM ABOUT THIS GORGEOUS PIE
Fellas, coincidence and fate figure largely in our lives
Dance with me!
The owls are not what they seem";

// Here we split it into lines
$lyrics = explode("\n", $lyrics);
// And then randomly choose a line
$chosen = wptexturize( $lyrics[ mt_rand(0, count($lyrics) - 1) ] );

// This just echoes the chosen line, we'll position it later
function hello_dolly() {
	global $chosen;
	echo "<p id='dolly'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'hello_dolly');

// We need some CSS to position the paragraph
function dolly_css() {
	echo "
	<style type='text/css'>
	#dolly {
		position: absolute;
		top: 2.3em;
		margin: 0;
		padding: 0;
		right: 10px;
		font-size: 16px;
		color: #d54e21;
	}
	</style>
	";
}

add_action('admin_head', 'dolly_css');

?>
