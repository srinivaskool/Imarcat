<form action="product_search_results.php" method="post" enctype="multipart/form-data" class="f1">
    <br>

	&nbsp;&nbsp;<select name="category">
	   <option value="">Select Product Category </option>
	   <option value=""> Any Field </option>
	   <option value="Electronics"> Electronics & Technology  </option>
	   <option value="Automobiles"> Automobiles & Industry  </option>
	   <option value="Food"> Food & Retail  </option>
	   <option value="Finance"> Finance & Banking  </option>
	   <option value="General"> General Marketing  </option>
	</select>
	

	&nbsp;&nbsp;<select name="mode_of_selling" >
	   <option value=""> Select Mode Of Marketing </option>
           <option value=""> All Marketing Options </option>
	   <option value="Digital Marketing"> Digital Marketing  </option>
	   <option value="Direct Marketing"> Direct Marketing </option>
	   <option value="Internet Marketing"> Internet Marketing </option>
	   <option value="Multilevel Marketing"> Multilevel Marketing </option>
	   <option value="Global Marketing"> Global Marketing </option>
	   <option value="Affiliate Marketing"> Affiliate Marketing </option>
	   <option value="Content Marketing"> Content Marketing   </option>
	   <option value="Retail Marketing"> Retail Marketing </option>
	   <option value="Digital and Direct Marketing"> Digital and Direct Marketing </option>
	</select>
	
	
	&nbsp;&nbsp;&nbsp;&nbsp;<select name="food" required>
	   <option value="">Select Incentive PerMonth </option>
	   <option value="0">0</option>
	   <option value="0 to 5000 PM">0 to 5000 PM</option>
	   <option value="5000 to 10000 PM">5000 to 10000 PM</option>
	   <option value="10000 to 20000 PM"> 10000 to 20000 PM</option>
	   <option value="20000 to 30000 PM">  20000 to 30000 PM </option>
	   <option value="30000 to 40000 PM"> 30000 to 40000 PM  </option>
	   <option value="40000 PM Above"> 40000 PM Above </option>
	</select>

    
    &nbsp;&nbsp;<input type="text" name="company_name" Placeholder="Company Name(Optional)"/>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search">
 <br>
 </form>