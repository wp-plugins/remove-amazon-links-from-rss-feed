<?php
/*
Plugin Name: Remove Amazon Links from RSS Feed
Plugin URI: http://philmcdonnell.com/projects/wordpress/remove-amazon-links-from-rss-feed/
Description: Removes all links to Amazon.com in the RSS feed so you will be in compliance with their TOS
Version: 1.1 - 4/4/2014
Author: Phil McDonnell
Author URI: http://www.philmcdonnell.com

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY
KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Change log
v1.1 - Updated preg_replace to leave everything including html between the removed Amazon <a href> </a> - before it was not working if it encountered any html nested tags. Release to public on WordPress.org

v1.0 - Original release to beta testers only.
*/

function PM_remove_amazon_links_from_rss_feed ($content)
{

	if (is_feed())
	{
	
	$content = preg_replace('#<a.[^>]+?amazon.com[^>]+?>(.+?)</a>#i', '$1', $content);
		
	return $content;
	
    }
	
	else
	
	{
    
	return $content;
	
	}

}

add_filter('the_content', 'PM_remove_amazon_links_from_rss_feed');