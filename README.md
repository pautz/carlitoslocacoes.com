# Carlito's Locações

## Nova Funcionalidade: ID no Barbante para Localização de Bebês

Este repositório apresenta o **ID no Barbante**, uma solução que utiliza um botão interativo para facilitar a localização de bebês, trazendo maior segurança e tranquilidade para os pais.

### O que é o ID no Barbante?

O ID no Barbante é uma tecnologia inovadora que rastreia bebês de forma segura e discreta, através de identificadores conectados à roupa ou chupeta do bebê.

### Benefícios

- **Maior segurança**: Ideal para locais movimentados.
- **Tranquilidade para os pais**: Monitoramento fácil.
- **Discreto e prático**: Não incomoda o bebê.

---

## HTML: Botão Estilizado para Web

Caso deseje utilizar o botão estilizado em um projeto web, adicione o código abaixo no HTML:

```html
<style>
.stylized-button {
  font-size: 16px;
  color: #fff;
  background-color: #008CBA;
  border: none;
  padding: 10px 20px;
  text-align: center;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
}
.stylized-button:hover {
  background-color: #005f73;
}
.responsive-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  align-items: center;
  justify-content: center;
}
.stylized-button {
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  z-index: 1000;
}
</style>
<div class="responsive-container">
  <a href="https://carlitoslocacoes.com/site6/site2/" target="_blank" class="stylized-button">ID no Barbante</a>
</div>```

Python: Botão Interativo com Tkinter
Aqui está o código completo para criar um botão interativo com Tkinter que abre um link ao clicar e pode ser movido pela tela:

```python
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
```

Como Executar
Instale o Python:

Baixe e instale a versão mais recente do Python. Recomendamos a versão 3.10 ou superior.

Salve o código:

Copie o código acima e salve em um arquivo chamado idnobarbante.py.

Abra o terminal:

No Windows, pressione Win + R, digite cmd e pressione Enter.

Navegue até a pasta onde o arquivo idnobarbante.py está salvo usando o comando cd.

Execute o script:

Execute o comando: python idnobarbante.py.

Funcionalidades
Abrir Link: Clique esquerdo no botão para abrir o link no navegador padrão.

Movimentação: Use o botão do meio do mouse para mover o botão pela tela:

Pressione o botão do meio para iniciar o movimento.

Arraste enquanto mantém o botão pressionado.

Solte para parar o movimento.

Licença
Este projeto está sob a MIT License.
