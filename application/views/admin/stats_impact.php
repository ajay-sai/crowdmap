<?php 
/**
 * Feedback view page.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     API Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
?>
<div class="bg">
	<h2><?php echo $title; ?> <a href="<?php print url::base() ?>admin/stats/hits">Hit Summary</a> <a href="<?php print url::base() ?>admin/stats/country">Country Breakdown</a> <a href="<?php print url::base() ?>admin/stats/reports">Report Stats</a> <a href="<?php print url::base() ?>admin/stats/impact">Category Impact</a></h2>
	<div class="content-wrap clearfix">
        <h3>Reports Impact</h3>
        
        <div id="time-period-selector">
            <p>Choose a date range: <a href="#">1 MO</a> <a href="#">3 MO</a> <a href="#">6 MO</a> <input type="text" class="dp" value="datepicker" /> - <input type="text" value="datepicker" class="dp" /> <input type="button" value="Go &rarr;" class="button" /> </p>
        </div>
        
        <!-- Left Column -->
        <div class="two-col tc-left reports-charts">
        <p>This chart gives you a linear view of the inpact of different categories over time.  Scroll from left to right to see a compartive view of the different categories. Mouse over the graph for more details.</p>
            <div id="impact_info2" class="impact_hidden">
                <div id="impact_legend2">&nbsp;</div>
                <div id="impact_message2">legend</div>
            </div>
            <div id="impact_placeholder"></div>
            <div id="impact_chart"></div>
            
        </div>
        
        <!-- Right Column -->
        <div class="two-col tc-right stats-sidebar">
        	<div class="stats-wrapper clearfix">
                <div class="statistic first">
                    <h4>Reports</h4>
                    <p>234</p>
                </div>
                <div class="statistic">
                    <h4>Categories</h4>
                    <p>7</p>
                </div>
            </div>
            <div style="clear:both;"></div>
    
        

	</div>
</div>
