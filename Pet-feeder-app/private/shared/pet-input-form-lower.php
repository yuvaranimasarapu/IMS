    <input id="age" type="number">
    <label for="age">Age (in years)</label><br>

    <input id="weight" type="number">
    <label for="weight">Weight (in lb)</label><br>

    <!--
        <input id="bday" type="date">
        <label for="bday">Pet birthday</label><br>  
                                        
        <textarea id="other_notes"></textarea>
        <label for="other_notes">Other notes</label><br>
        -->
    <label for="diet">What type of diet does your pet have?</label>
    <select name="diet" id="diet">
        <optgroup label="Raw">
            <option value="raw_grain_free">Raw grain free</option>
            <option value="raw_limited_diet">Raw limited diet</option>
        </optgroup>
        <optgroup label="Dry">
            <option value="dry_grain_free">Dry grain free</option>
            <option value="dry_limited_diet">Dry limited diet</option>
        </optgroup>
        <optgroup label="Wet">
            <option value="wet_grain_free">Wet grain free</option>
            <option value="wet_limited_diet">Wet limited diet</option>
        </optgroup>
        <optgroup label="Other">
            <option value="other_diet">Other diet</option>
        </optgroup>

    </select><br>



    <div>
        <label for="activity_level">Pet's level of activity</label>
        <select id="activity_level" name="activity_level">
            <option value="Active">Active</option>
            <option value="Normal">Normal</option>
            <option value="Less_active">Less active</option>
            <option value="Other_activity">Other level of activity</option>
        </select><br>
    </div>

    <fieldset>
        <legend>Gender</legend>

        <input type="radio" name="sex" value="male" id="male" checked><label
            for="male">male</label><br>
        <input type="radio" name="sex" value="female" id="female"><label
            for="female">female</label><br>
    </fieldset>
    <br>

    <fieldset>
        <legend>Neutered or not?</legend>
        <input type="radio" name="neutered" value="intact" id="red" checked><label
            for="intact">intact</label><br>
        <input type="radio" name="neutered" value="neutered" id="blue"><label
            for="neutered">neutered</label><br>
    </fieldset>
    <br>

    <input type="submit" value="Submit">
</form>