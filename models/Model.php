<?php

/**
 * Model
 */
class Model
{
    public $http_response_code;
    public $output;
	public $token = null;

	/* This is the parent constructor() for all Models
	 *
	 */
    public function __construct()
    {
        $this->http_response_code = 200; // Auto-good; be careful as any 400/500 code aborts request
        $this->output = array();

	    // HTTP Request Made (disabled)
	    if (0 && !is_null($request = requestParser::getRequest()))
	    {
		    $request = implode("->", $request);
		    // Let's make it look nice
		    $this->output["request"] = array("request" => $request,
			    "time" => date("h:i:s A", time()),
			    "date" => date("m-d-Y", time()));
	    }

	    // Add Token only if passed (This is just to keep track of the token used on the request)
	    // CLIENT DOES NOT REALLY NEED THIS (DEBUG)
	    if (!is_null($t = requestParser::getToken()))
	        $this->output["token_passed"] = $t;

		$this->output["status"] = "Hello World! ";
	    $this->output["success"] = false; //default false, so only upon a successful request is it set to true
        //$this->output["clientIP"] = $this->getRealIpAddr(); // If you want it
    }

	protected function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		$details = file_get_contents("http://ipinfo.io/{$ip}/json");
		$details = json_decode($details);
		return $details;
	}
}
