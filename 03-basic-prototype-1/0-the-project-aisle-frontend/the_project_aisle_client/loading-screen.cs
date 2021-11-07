using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Media;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace the_project_aisle_client
{
    public partial class LoadingScreen : Form
    {
        int progressBarStatus = 0;

        public LoadingScreen()
        {
            InitializeComponent();
        }

        private void LoadingScreen_Load(object sender, EventArgs e)
        {

            try
            {
            
                using (StreamWriter writetext = new StreamWriter("csharp-input.txt"))
                {

                    writetext.WriteLine("[NULL] | [NULL] | [NULL]");

                }

            }
            catch (Exception err)
            {
                Console.WriteLine(err.Message);
            }

            
            SoundPlayer my_sound = new SoundPlayer("bg-sound.wav"); //put your own .wave file path
            my_sound.Play();

            timer1.Start();
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            progressBarStatus++;

            if (progressBarStatus == 100)
            {
                this.Hide();
                timer1.Stop();
                MainForm main_form_object = new MainForm();
                main_form_object.Show();
            }
            else
            {
                splash_screen_progressbar.Value = progressBarStatus;
            }
        }
    }
}
