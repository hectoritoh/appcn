<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        
        
        
        $twitter = $this->get('endroid.twitter');

        // Retrieve the user's timeline
        $tweets = $twitter->getTimeline(array(
            'count' => 5
        ));

        // Or retrieve the timeline using the generic query method
        //$response = $twitter->query('statuses/user_timeline?user_name=fzzio', 'GET', 'json');

        //$twitteruser = "fzzio";
        //$notweets = 5;
        //
        //
        //$query = "https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=" . $twitteruser . "&count=" . $notweets ; 
        //$response = $twitter->query( $query  , 'GET', 'json');










        //$tweets = json_decode($response->getContent());
        echo "<pre>";
        print_r($tweets);
        echo "</pre>";

        die();
        
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }

    public function feedAction($username, $cantidad)
    {

        $twitter = $this->get('endroid.twitter');

        $parameters = array(
                        "screen_name" => $username,
                        "count" => $cantidad
                    );

        // Or retrieve the timeline using the generic query method
        $response = $twitter->query('statuses/user_timeline', 'GET', 'json', $parameters);
        $tweets = json_decode($response->getContent());

        


        // echo "<pre>";
        // print_r($tweetsArray[0]);
        // echo "</pre>";

        die();

        /*echo "<pre>";
        print_r($tweets);
        echo "</pre>";

        die();*/

        return $this->render('AcmeDemoBundle::feedUser.html.twig', array('username' => $username));
    }




    public function getHashtagAction($hashtag)
    {
        #BSC+OR+from:StudioFutbol
        // %23BSC%2BOR%2Bfrom%3AStudioFutbol&count=10
        //// https://api.twitter.com/1.1/search/tweets.json?q=%23BSC%2BAND%2Bfrom%3AStudioFutbol&count=10

        

        
        //$getfield .= '&count=16&exclude_replies=true&include_rts=true&contributor_details=true';
        
        //https://api.twitter.com/1.1/search/tweets.json?q=from%3ACmdr_Hadfield%20%23nasa&result_type=popular
        //q=from:Cmdr_Hadfield #nasa&result_type=popular
        //https://api.twitter.com/1.1/statuses/user_timeline.json?count=10&exclude_replies=true&user_id=55764330&screen_name=fzzio&q=%23BuenosD%C3%ADas
        /*
            ,
                        "exclude_replies" => "true",
                        "include_rts"=> "true",
                        "contributor_details" => "true"

                        "q" => "#" . $hashtag . "+AND+from:" . $username,
        */


        $twitter = $this->get('endroid.twitter');

        $parameters = array(
                        "q" => "#". $hashtag,
                        "count" => 5,
                        "exclude_replies" => "true",
                        "include_rts"=> "false",
                        "contributor_details" => "false"
                    );

        $response = $twitter->query('search/tweets', 'GET', 'json', $parameters);
        $tweets = json_decode($response->getContent());

        echo "<pre>";
        print_r($tweets);
        echo "</pre>";

        die();

        return $this->render('AcmeDemoBundle::feedUser.html.twig', array('username' => $username));
    }



    public function linkify_twitter_status($status_text){
        // linkify URLs
        $status_text = preg_replace(
            '/(https?:\/\/\S+)/',
            '<a href="\1">\1</a>',
            $status_text
        );

        // linkify twitter users
        $status_text = preg_replace(
            '/(^|\s)@(\w+)/',
            '\1@<a href="http://twitter.com/\2">\2</a>',
            $status_text
        );

        // linkify tags
        $status_text = preg_replace(
            '/(^|\s)#(\w+)/',
            '\1#<a href="http://search.twitter.com/search?q=%23\2">\2</a>',
            $status_text
        );

        return $status_text;
    }


    public function getTweetsHashtagAction($username, $hashtag)
    {
        #BSC+OR+from:StudioFutbol
        // %23BSC%2BOR%2Bfrom%3AStudioFutbol&count=10
        //// https://api.twitter.com/1.1/search/tweets.json?q=%23BSC%2BAND%2Bfrom%3AStudioFutbol&count=10

        

        
        //$getfield .= '&count=16&exclude_replies=true&include_rts=true&contributor_details=true';
        
        //https://api.twitter.com/1.1/search/tweets.json?q=from%3ACmdr_Hadfield%20%23nasa&result_type=popular
        //q=from:Cmdr_Hadfield #nasa&result_type=popular
        //https://api.twitter.com/1.1/statuses/user_timeline.json?count=10&exclude_replies=true&user_id=55764330&screen_name=fzzio&q=%23BuenosD%C3%ADas
        /*
            ,
                        "exclude_replies" => "true",
                        "include_rts"=> "true",
                        "contributor_details" => "true"

                        "q" => "#" . $hashtag . "+AND+from:" . $username,
            https://twitter.com/search?f=realtime&q=%23BSC%20from%3Afzzio&src=typd
            https://twitter.com/search?f=realtime&q=#BSC from:fzzio&src=typd

            f=realtime
            q=#BSC from:fzzio
            src=typd

        */



        ////////////////////////////////////////////////////////////////////////////////////////////
        /*
        $twitter = $this->get('endroid.twitter');

        $parameters = array(
                        "q" => "#" . $hashtag . " from:@"  . $username,
                        //"q" => "#" . $hashtag,
                        //"q" => "from:"  . $username,
                        "f" => "realtime",
                        "src" => "typd"
                    );


        $response = $twitter->query('statuses/user_timeline', 'GET', 'json', $parameters);
        $tweets = json_decode($response->getContent());
        */
        ////////////////////////////////////////////////////////////////////////////////////////////


        $twitter = $this->get('endroid.twitter');

        $parameters = array(
                        "screen_name" => $username,
                        "count" => 100,
                        "exclude_replies" => "true",
                        "include_rts"=> "false",
                        "contributor_details" => "false"
                    );

        // Or retrieve the timeline using the generic query method
        $response = $twitter->query('statuses/user_timeline', 'GET', 'json', $parameters);
        $tweetsTotal = json_decode($response->getContent());

        $tweets = $this->getTweetsConHashtagAction($tweetsTotal, $hashtag);


        echo "<pre>";
        print_r($tweets);
        echo "</pre>";

        die();

        return $this->render('AcmeDemoBundle::feedUser.html.twig', array('username' => $username));
    }


    public function getTweetsConHashtagAction($tweetsTotal, $hashtagBuscado){
        $tweets = array();
        foreach ($tweetsTotal as $tweet) {
            if(count($tweet->entities->hashtags) > 0){
                foreach ($tweet->entities->hashtags as $hashtag) {
                    if(strcmp($hashtag->text, $hashtagBuscado) == 0){
                        array_push($tweets, $tweet);
                    }
                }

            }
        }
        return $tweets;
    }

}
