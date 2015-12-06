<?php
    //Paths
    $path = "../..";
    $img_path = "../../images/articles";

    $imgix_path = "https://herts-rider-issue2.imgix.net/articles/";

    $imgix_path_ads = "https://herts-rider-issue2.imgix.net/ads/";


    $url = "http://hertfordshirerider.co.uk/";



    //Previous and Next Articles

    $add = "+";
    $subtract = "-";

    $prev = eval('return '.$page_id.$subtract.'1'.';');
    $next = eval('return '.$page_id.$add.'1'.';');

    // Page Array
    $page_issue2 = array(
    '0' => array(
        'id'    => 'contents',
        'title' => 'Contents',
        'blurb' => 'Herts Rider Contents Page',
        'type'  => 'articles',
        'button' => 'Find out more'),
    '1' => array(
        'id'    => 'about',
        'title' => 'Welcome to Hertfordshire Rider',
        'blurb' => 'Foreword by Alex Lowes - World Superbike racer and British Champion',
        'type'  => 'articles',
        'button' => 'Find out more'),
    '2' => array(
        'id'    => 'metropolis',
        'title' => 'Metropolis motorcycles',
        'url'   => 'http://www.metropolismotorcycles.com/barnet/',
        'type'  => 'ads',
        'button' => 'View article'),
    '3' => array(
        'id'    => 'winter-riding',
        'title' => 'Winter Riding',
        'blurb' => 'Modern kit, clothing and bikes give British bikers the chance to really extend our biking year – if we want to',
        'type'  => 'articles',
        'button' => 'View article'),
    '4' => array(
        'id'    => 'hertfordshire-to-china',
        'title' => 'Hertfordshire to China',
        'blurb' => 'The 10,000 mile trip to China',
        'type'  => 'articles',
        'button' => 'View article'),
    '5' => array(
        'id'    => 'art-of-motorcycle-riding',
        'title' => 'Zen and the art of motorcycle riding',
        'blurb' => 'Whether you’re a new rider or a grizzly seasoned dispatcher, one key quality all riders need is self-awareness. I don’t mean you need to take an existential journey into the meaning of existence and your place within it, but you do need to have some idea of how you react to difference circumstances and situations.',
        'type'  => 'articles',
        'button' => 'View article'),
    '6' => array(
        'id'    => 'road-to-hell',
        'title' => 'Road to hell?',
        'blurb' => 'When Rob Box decided to commute by bike he was under pressure to prove himself. Or so he thought...',
        'type'  => 'articles',
        'button' => 'View article'),
    '7' => array(
        'id'    => 'competition',
        'title' => 'Win a GoPro Hero4 Session worth £249',
        'blurb'  => 'Capture the action with the most compact GoPro camera yet',
        'type'  => 'articles',
        'button' => 'View article'),
    '8' => array(
        'id'    => 'close-shave',
        'title' => 'A seriously close shave',
        'blurb'  => 'John Oliver is a highly skilled and experienced motorcyclist, but that didn’t stop him from almost being involved in a crash that was entirely his own fault...',
        'type'  => 'articles',
        'button' => 'View article'),
    '9' => array(
        'id'    => 'theory-test-quiz',
        'title' => 'Theory test quiz',
        'blurb' => 'See if you’re ready to take the theory test with our interactive quiz',
        'type'  => 'articles',
        'button' => 'View article'),
    '10' => array(
        'id'    => 'maintenance-tips-and-hints',
        'title' => 'Maintenance tips & hints',
        'blurb' => 'Modern bikes are harder to work on than ever, as their makers want you to pay a franchised dealer to carry out even the most simple tasks. But there’s still plenty you can do...',
        'type'  => 'articles',
        'button' => 'View article'),
    '11' => array(
        'id'    => 'the-big-softy',
        'title' => 'The big softy…',
        'blurb' => 'The Yamaha XJR1300 has seen some big changes after 20 years or so…',
        'type'  => 'articles',
        'button' => 'View article'),
    '12' => array(
        'id'    => 'moores',
        'title' => 'Moores | New &amp; used motorcycles, mopeds and scooters',
        'url'   => 'http://www.mooresmotorcycles.co.uk/',
        'type'  => 'ads'),
    '13' => array(
        'id'    => 'how-to-buy-the-right-kit',
        'title' => 'How to buy the right kit',
        'blurb' => 'Making sure you’re well protected is at least as important as picking the right bike, but modern biking kit isn’t as bulky or as expensive as it was. There’s suitable kit available for every budget – you really don’t have to break the bank to be protected against incidents and the elements.',
        'type'  => 'articles',
        'button' => 'View article'),
    '14' => array(
        'id'    => 'product-reviews',
        'title' => 'Ten of the Best',
        'blurb' => 'If you’re after the right helmet for year-round use, the best way to protect your bike from the elements or a way to keep your pinkies warm in winter, just step this way…',
        'type'  => 'articles',
        'button' => 'View article'),
    '15' => array(
        'id'    => 'bikestop',
        'title' => 'Bike Stop',
        'url'   => 'http://www.bikestop.co.uk',
        'type'  => 'ads',
        'button' => 'View article'),
    '16' => array(
        'id'    => 'motorcycle-clubs-directory',
        'title' => 'Motorcycle clubs directory',
        'blurb' => 'Fed up of riding alone? Feel like Billy No-Mates? Then join one of these groups of like-minded bikers',
        'type'  => 'articles',
        'button' => 'View article'),
    '17' => array(
        'id'    => 'bmf',
        'title' => 'BMF | Pursue, promote and protect the rights of motorcyclists',
        'url'   => 'http://www.bmf.co.uk/',
        'type'  => 'ads'),
    '18' => array(
        'id'    => 'biker-down',
        'title' => 'The Hertfordshire Biker Down course',
        'blurb' => 'Avoiding crashes and knowing how to deal with one are skills that too many motorcyclists don’t have. But a free solution is at hand...',
        'type'  => 'articles',
        'button' => 'View article'),
    '19' => array(
        'id'    => 'fire-bike',
        'title' => 'The Hertfordshire FireBike',
        'blurb' => 'Firefighters don’t just clear up after crashes &mdash; they also help to prevent them from happening in the first place',
        'type'  => 'articles',
        'button' => 'View article'),
    '20' => array(
        'id'    => 'sportsbikeshop-competition',
        'title' => 'Win £750-worth of biking kit',
        'blurb'  => 'Win the kit you need to stay safe on your bike, thanks to sportsbikeshop.co.uk',
        'type'  => 'articles',
        'button' => 'View article'),
    '21' => array(
        'id'    => 'routes-to-riding',
        'title' => 'Routes to riding',
        'blurb' => 'Confused about what it takes to get onto two wheels? Here, all is explained...',
        'type'  => 'articles',
        'button' => 'View article'),
    '22' => array(
        'id'    => 'motorcycle-security',
        'title' => 'Motorcycle security',
        'blurb' => 'Motorbikes are easy targets for thieves, which is why you need to make life as hard as possible for them. Here’s how',
        'type'  => 'articles',
        'button' => 'View article')
    );

?>
