<form id="booking_form">
        <input type="text" value="Standsted" name="standsted" disabled>
        <input list="destination" name="destination" placeholder="where are you looking to go?">
        <datalist id="destination">
            <option value="Paris">
            <option value="Glasgow">
            <option value="Manchester">
            <option value="Dublin">
            <option value="Madrid">
            <option value="Brussels">
        </datalist>
        <input type="date" name="date">
        <input type="submit" value="Search" name="search">
    </form>