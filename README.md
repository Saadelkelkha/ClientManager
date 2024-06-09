# ClientManager
These PHP scripts collectively manage a client database, allowing for CRUD (Create, Read, Update, Delete) operations through a web interface

### File Descriptions and Names

1. **index.php**
   - **Description**: This is the main page of the ClientManager project. It connects to the database, retrieves all client records, and displays them in a table. Each client entry includes options to modify or delete the record. There's also a link to add a new client.

2. **delete.php**
   - **Description**: This file handles the deletion of a client record based on the provided ID. It executes a SQL DELETE query and then redirects back to the main page.

3. **add.php**
   - **Description**: This file displays a form to add a new client. When the form is submitted, it inserts the new client record into the database and redirects back to the main page.

4. **edit.php**
   - **Description**: This file retrieves the existing data of a client based on the provided ID and displays a form to edit the client's information. It pre-fills the form with the existing data.

5. **update.php**
   - **Description**: This file handles the updating of a client record. It executes an SQL UPDATE query based on the submitted form data and then redirects back to the main page.
