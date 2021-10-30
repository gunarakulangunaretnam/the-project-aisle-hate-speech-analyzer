using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace the_project_aisle_client
{
    public partial class MainForm : Form
    {
        curd_function curdOpearation = new curd_function();

        public void getSocialMediaNames() {

            comboBox1.Items.Clear(); // Clear all iteams before it get items from DB.
            comboBox1.Items.Add("All");
            comboBox1.SelectedIndex = 0;

            string sqlCode = "SELECT distinct social_media FROM social_media";
            MySqlDataReader allData = curdOpearation.SelectQuery(sqlCode);

            while (allData.Read())
            {

                comboBox1.Items.Add(allData.GetString(0));

            }
            
        }

        public void getAllData()
        {
            DataTable data = new DataTable();
            data.Columns.Add("Social Media");
            data.Columns.Add("Account Name");
            data.Columns.Add("Account Type");
            data.Columns.Add("URL");
            data.Columns.Add("Network Size");
            data.Columns.Add("Language");
            data.Columns.Add("Test Attempts");
            data.Columns.Add("Main User");
            data.Columns.Add("Remarks");

            
            string sqlCode = "SELECT * FROM social_media";
            MySqlDataReader allData = curdOpearation.SelectQuery(sqlCode);

            while (allData.Read())
            {

                data.Rows.Add(allData.GetString("social_media"), allData.GetString("account_name"), allData.GetString("account_type"), allData.GetString("url"), allData.GetString("network_size"), allData.GetString("language"), allData.GetString("number_of_time_tested"), allData.GetString("remarks"), allData.GetString("main_user_name"));

                
            }

            bunifuCustomDataGrid1.DataSource = data;

        }

        public void getAllDataForSelector(string socialMedia)
        {

            DataTable data = new DataTable();
            data.Columns.Add("Social Media");
            data.Columns.Add("Account Name");
            data.Columns.Add("Account Type");
            data.Columns.Add("URL");
            data.Columns.Add("Network Size");
            data.Columns.Add("Language");
            data.Columns.Add("Test Attempts");
            data.Columns.Add("Main User");
            data.Columns.Add("Remarks");

        
            string sqlCode = "";

            if (socialMedia == "All")
            {
                sqlCode = "SELECT * FROM social_media";
            }
            else {

                sqlCode = "SELECT * FROM social_media WHERE social_media = '" + socialMedia + "'";
            }
        
            MySqlDataReader allData = curdOpearation.SelectQuery(sqlCode);

            while (allData.Read())
            {

                data.Rows.Add(allData.GetString("social_media"), allData.GetString("account_name"), allData.GetString("account_type"), allData.GetString("url"), allData.GetString("network_size"), allData.GetString("language"), allData.GetString("number_of_time_tested"), allData.GetString("remarks"), allData.GetString("main_user_name"));


            }

            bunifuCustomDataGrid1.DataSource = data;

        }

        public MainForm()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void label2_Click(object sender, EventArgs e)
        {
            this.WindowState = FormWindowState.Minimized;
        }

        int canM = 0;
        int XC = 0;
        int YC = 0;

        private void panel4_MouseMove(object sender, MouseEventArgs e)
        {
            if (canM == 1)
            {

                this.SetDesktopLocation(MousePosition.X - XC, MousePosition.Y - YC);
            }
        }

        private void panel4_MouseDown(object sender, MouseEventArgs e)
        {
            canM = 1;
            XC = e.X;
            YC = e.Y;
        }

        private void panel4_MouseUp(object sender, MouseEventArgs e)
        {
            canM = 0;
        }

        private void MainForm_Load(object sender, EventArgs e)
        {
            getAllData();
            getSocialMediaNames(); 
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

            getAllDataForSelector(comboBox1.Text);
            

        }
    }
}
