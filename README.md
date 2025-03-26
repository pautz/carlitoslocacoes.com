Carlito's Locações
Nova Funcionalidade: ID no Barbante para Localização de Bebês
Bem-vindo ao repositório oficial do Carlito's Locações! Estamos entusiasmados em apresentar nossa nova funcionalidade: ID no Barbante, uma solução inovadora para aumentar a segurança e localizar bebês em ambientes movimentados.

O que é o ID no Barbante?
O ID no Barbante é um recurso seguro e discreto que permite rastrear a localização de bebês, sendo facilmente acoplado à chupeta ou roupa do bebê.

Benefícios
Segurança: Tranquilidade em locais públicos ou eventos movimentados.

Praticidade: Fácil de usar e configurar.

Discrição: Um identificador pequeno e leve que não incomoda o bebê.

Código Interativo com Tkinter
Aqui está o código Python completo para criar um botão interativo que pode abrir um link e ser movimentado pela tela:

python
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
Funcionalidades do Código
Abrir Link: Clique esquerdo no botão para abrir o link no navegador.

Movimentação do Botão: Clique e segure o botão do meio do mouse para mover o botão pela tela.

Como Executar
Instale o Python (recomendado: versão 3.10 ou superior).

Salve o código em um arquivo chamado idnobarbante.py.

Abra o terminal e navegue até o diretório onde o arquivo está localizado.

Execute o script com o comando: python idnobarbante.py.

Licença
Este projeto está licenciado sob a MIT License.
