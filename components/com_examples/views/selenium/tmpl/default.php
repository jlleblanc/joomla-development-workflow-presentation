<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<form action="index.php" method="post">
	<table>
		<tr>
			<td width="110" class="key">
				<label for="title">
					Name
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="name" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Address 1
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="address_1" size="60" value="" />
			</td>
		</tr>

		<tr>
			<td width="110" class="key">
				<label for="title">
					Address 2
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="address_2" size="60" value="" />
			</td>
		</tr>

		<tr>
			<td width="110" class="key">
				<label for="title">
					City
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="city" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					State or Province
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="state_or_province" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Postal Code
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="postal_code" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Country
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="country" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Phone Number
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="phone_number" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Email
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="email" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Area of Interest
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="area_of_interest" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Availability
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="availability" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Age
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="age" size="60" value="" />
			</td>
		</tr>
		
		<tr>
			<td width="110" class="key">
				<label for="title">
					Special Considerations
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="special_considerations" size="60" value="" />
			</td>
		</tr>
		
		
	</table>

	<input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="option" value="<?php echo $option ?>" />
	<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>