import tkinter as tk
import webbrowser

# Função executada ao clicar no botão (abrir link)
def button_action():
    url = "https://carlitoslocacoes.com/site6/site2"  # Link associado ao botão
    webbrowser.open(url)  # Abre o link no navegador padrão

# Função para iniciar o movimento do botão
def start_move(event):
    global moving
    moving = True
    global offset_x, offset_y
    offset_x = event.x
    offset_y = event.y

# Função para mover o botão
def move_button(event):
    if moving:
        new_x = event.x_root - offset_x
        new_y = event.y_root - offset_y
        button.place(x=new_x, y=new_y)

# Função para parar o movimento do botão
def stop_move(event):
    global moving
    moving = False

# Configuração da janela principal
root = tk.Tk()
root.title("Overlay")
root.geometry(f"{root.winfo_screenwidth()}x{root.winfo_screenheight()}")  # Janela ocupa tela inteira
root.attributes('-topmost', True)  # Janela sempre no topo
root.overrideredirect(True)  # Remove barra da janela
root.configure(bg='white')  # Cor de fundo transparente
root.attributes('-transparentcolor', 'white')  # Define "white" como transparente

# Estado do movimento
moving = False

# Criação do botão com fundo visível e texto legível
button = tk.Label(root, text="ID no Barbante", font=("Arial", 12), fg="blue", bg="lightgray", bd=1, relief="solid")
button.place(x=100, y=100)  # Posição inicial do botão

# Vincular o clique esquerdo ao botão para abrir o link
button.bind('<Button-1>', lambda event: button_action())

# Bind dos eventos do mouse para movimentação
button.bind('<Button-2>', start_move)    # Clique com o botão do meio do mouse sobre o botão
button.bind('<B2-Motion>', move_button)  # Movimento enquanto o botão do meio é pressionado
button.bind('<ButtonRelease-2>', stop_move)  # Soltar o botão do meio

# Loop principal da aplicação
root.mainloop()
