using System;
using System.Diagnostics; // Necessário para abrir o navegador
using System.Drawing;
using System.Windows.Forms;

public class Program
{
    private static bool isMoving = false; // Estado de movimento do botão
    private static Point offset; // Deslocamento do movimento

    [STAThread]
    static void Main()
    {
        // Inicia o aplicativo Windows Forms
        Application.EnableVisualStyles();
        Application.SetCompatibleTextRenderingDefault(false);

        // Cria o formulário principal
        Form form = new Form
        {
            Text = "Overlay",
            Width = Screen.PrimaryScreen.Bounds.Width, // Ocupa a largura total da tela
            Height = Screen.PrimaryScreen.Bounds.Height, // Ocupa a altura total da tela
            StartPosition = FormStartPosition.CenterScreen,
            FormBorderStyle = FormBorderStyle.None, // Remove a barra de título e bordas
            TopMost = true, // Garante que a janela fique sempre no topo
            BackColor = Color.White, // Cor de fundo que pode ser transparente
            ShowInTaskbar = false, // Oculta o formulário da barra de tarefas
            Opacity = 0.8 // Ajuste de transparência (80% visível)
        };

        form.TransparencyKey = Color.White; // Define "White" como transparente, criando efeito overlay

        // Cria o botão
        Button button = new Button
        {
            Text = "ID no Barbante",
            Font = new Font("Arial", 12),
            ForeColor = Color.Blue,
            BackColor = Color.LightGray,
            FlatStyle = FlatStyle.Flat,
            Size = new Size(120, 50),
            Location = new Point(100, 100) // Posição inicial do botão
        };

        // Adiciona o evento para abrir o link
        button.Click += (sender, e) =>
        {
            string url = "https://carlitoslocacoes.com/site6/site2";
            Process.Start(new ProcessStartInfo
            {
                FileName = url,
                UseShellExecute = true
            });
        };

        // Eventos para movimentação do botão
        button.MouseDown += (sender, e) =>
        {
            if (e.Button == MouseButtons.Middle) // Clique no botão do meio
            {
                isMoving = true;
                offset = e.Location; // Captura a posição inicial do clique
            }
        };

        button.MouseMove += (sender, e) =>
        {
            if (isMoving)
            {
                button.Left += e.X - offset.X; // Move o botão horizontalmente
                button.Top += e.Y - offset.Y; // Move o botão verticalmente
            }
        };

        button.MouseUp += (sender, e) =>
        {
            if (e.Button == MouseButtons.Middle) // Solta o botão do meio
            {
                isMoving = false;
            }
        };

        // Adiciona o botão ao formulário
        form.Controls.Add(button);

        // Executa o formulário
        Application.Run(form);
    }
}
