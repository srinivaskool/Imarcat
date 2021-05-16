<form action="search_backend.php" method="post" enctype="multipart/form-data" class="f1">
    <br>

	&nbsp;&nbsp;<select name="category" required>
	   <option value=""> Product Category* </option>
	   <option value=""> Any</option>
	   <option value="Buy"> Buy  </option>
	   <option value="Sell"> Sell  </option>
	</select>
	
	
	&nbsp;&nbsp;&nbsp;&nbsp;<select name="type" required>
	   <option value=""> Type* </option>
	   <option value="flats"> flats  </option>
	   <option value="shops"> shops  </option>
	</select>

      &nbsp;&nbsp; &nbsp; &nbsp;<select name="city" required>
	   <option value=""> City* </option>
	   <option value="hyderabad"> hyderabad  </option>
	   <option value="vizag"> vizag  </option>
	</select>
	
      &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="locality" Placeholder="Locality (Optional)" id="locality">
	   
		

   &nbsp;&nbsp; <input type="text" name="min_budget" Placeholder="Min Budget (Optional)"/>
    
    &nbsp;&nbsp;<input type="text" name="max_budget" Placeholder="Max Budget (Optional)"/>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search">
 <br>
 </form>