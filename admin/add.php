<link rel="stylesheet" href="css/style.css" type="text/css">
<div id="add_country">
    <form action="add_country.php" method="post" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td class="left">国家名称：</td>
    			<td class="right"><input type="text" class="input_text" id="country_name_id" name="country_name"></td>
    		</tr>
    		<tr>
    			<td class="left">国家历史：</td>
    			<td class="right"><input type="file" class="input_file" id="country_history_txt" name="country_history"></td>
    		</tr>
    		<tr>
    			<td class="left">国家国旗：</td>
    			<td class="right"><input type="file" class="input_file" id="country_flag_img" name="country_flag"></td>
    		</tr>
    		<tr>
    			<td class="left">国家图片：</td>
    			<td class="right"><input type="file" class="input_file" id="country_picture_img" name="country_picture"></td>
    		</tr>
    		<tr>
                <td class="left">图片描述：</td>
                <td class="right"><input type="text" class="input_text" id="country_picture_txt" name="country_picture_txt"></td>
            </tr>
    		<tr>
    			<td class="left"><input type="submit" value="确认添加"></td>
    			<td class="right"><input type="reset" value="重置"></td>
    		</tr>
    	</table>
    </form>
</div>