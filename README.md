# Carlito's Locações
<p>Estamos entusiasmados em anunciar uma nova e inovadora funcionalidade em nosso site Carlito's Locações. A partir de agora, você pode usufruir da tecnologia de "ID no Barbante" para aumentar a segurança e localização de bebês!</p>

## Nova Funcionalidade: ID no Barbante para Localização de Bebês

Este repositório apresenta o **ID no Barbante**, uma solução que utiliza um botão interativo para facilitar a localização de bebês, trazendo maior segurança e tranquilidade para os pais.

### O que é o ID no Barbante?
O ID no Barbante é um recurso que permite rastrear a localização de bebês através de um identificador seguro e discreto, preso à chupeta ou à roupa do bebê. Essa funcionalidade foi desenvolvida para garantir a tranquilidade dos pais e responsáveis, proporcionando maior segurança em eventos, ambientes com grande circulação de pessoas, ou até mesmo viagens internacionais.</p>
         
   ## Como Funciona?
   O identificador é equipado com um número no barbante que se comunica com nosso sistema de rastreamento. Em caso de perda, os pais podem acessar o sistema através do nosso site e localizar o bebê rapidamente.

O ID no Barbante é uma tecnologia inovadora que rastreia bebês de forma segura e discreta, através de identificadores conectados à roupa ou chupeta do bebê.

### Benefícios

<li>Maior segurança em eventos e locais movimentados</li>
             <li>Tranquilidade para os pais e responsáveis</li>
             <li>Fácil de usar e discreto</li>

---

# Botão Interativo com Tkinter

## Descrição

Este projeto é um exemplo de como criar um **botão interativo** utilizando a biblioteca Tkinter do Python. O botão possui as seguintes funcionalidades:
- Abre um link ao ser clicado.
- Pode ser movimentado pela tela usando o **botão do meio do mouse**.

Este projeto é uma ótima introdução ao uso de **Tkinter**, permitindo explorar interações simples e úteis para interfaces gráficas.

---

## Funcionalidades

- **Abrir Link**: Clique com o botão esquerdo no botão para abrir um link no navegador.
- **Mover o Botão**:
  - Pressione o botão do meio do mouse sobre o botão para iniciar o movimento.
  - Arraste enquanto mantém o botão do meio pressionado.
  - Solte para parar o movimento.

---

## Pré-requisitos

Certifique-se de que você tenha o Python instalado no seu computador. Recomendamos a **versão 3.10 ou superior**. 

Para verificar se o Python está instalado, use o seguinte comando no terminal ou prompt de comando:

```bash
python --version
```

---

## Como Executar

1. **Clone ou faça o download do repositório**.

2. **Salve o código abaixo em um arquivo chamado `idnobarbante.py`**:

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

3. **Abra o terminal ou prompt de comando**:

   - No Windows, pressione `Win + R`, digite `cmd` e pressione Enter.
   - Navegue até o diretório onde o arquivo `idnobarbante.py` foi salvo usando o comando `cd`.

4. **Execute o script**:

   ```bash
   python idnobarbante.py
   ```

---

## Estrutura do Projeto

O projeto é simples e contém apenas o arquivo principal com o código do botão interativo:

```
/projeto-python
    ├── idnobarbante.py
    └── README.md
```

---

## Tecnologias Utilizadas

- **Python 3.10 ou superior**
- **Tkinter**: Biblioteca padrão do Python para a criação de interfaces gráficas.
- **Webbrowser**: Biblioteca padrão do Python para abrir links no navegador.

---

## Personalização

Você pode personalizar:
- O texto do botão alterando o argumento `text="ID no Barbante"` na criação do botão.
- O link associado ao botão ajustando a variável `url` na função `button_action`.

---

## Licença

Este projeto está sob a licença [MIT License](https://opensource.org/licenses/MIT).


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
</div>
```

## Nova Funcionalidade: Executável para Windows
Apresentamos o executável idnobarbante.exe, disponível para download, que oferece uma interface gráfica intuitiva e prática para navegar pelas funcionalidades do Carlito's Locações.
https://github.com/pautz/carlitoslocacoes.com/tree/main/ID%20no%20Barbante

## Tecnologias Utilizadas
C#: Para o desenvolvimento do executável.

Windows Forms: Para a criação da interface gráfica.

WebBrowser: Controle integrado de navegação.

## Licença
Este projeto está sob a licença MIT License.
