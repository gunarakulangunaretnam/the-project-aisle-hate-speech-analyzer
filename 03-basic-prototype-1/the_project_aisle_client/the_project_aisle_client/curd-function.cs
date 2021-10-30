using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace the_project_aisle_client
{
    class curd_function
    {

        public MySqlDataReader SelectQuery(string query)
        {

            try
            {
                MySqlConnection myConnect = new MySqlConnection("SERVER=localhost;DATABASE=the-project-aisle;UID=root;PASSWORD=");
                myConnect.Open();
                MySqlCommand myCommand = new MySqlCommand(query, myConnect);
                MySqlDataReader data = myCommand.ExecuteReader();
                return data;
                
            }
            catch (Exception Ex)
            {
                MessageBox.Show(Ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                throw Ex;
            }
        }
    }
}
