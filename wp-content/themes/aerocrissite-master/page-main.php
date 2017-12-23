<?php
    //Template Name: Principal
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="news container-fluid" id="noticias">
  <h1 class="news-title anime">Notícias Aerocris</h1>
  <p class="news-text anime">Nesta seção você fica sabendo das últimas novidades da nossa empresa.</p>
    <div class="row news-main anime">
      <div class="col-xl-3 col-md-12 last-news">
        <h2 class="last-news-title">Últimas Notícias</h2>
        <div>
        <?php if(get_field('noticias')): $i = 0; ?>
        <?php while(has_sub_field('noticias')): $i++; ?>
          <div href="#noticia-<?php echo $i; ?>" class="news-list">
            <div class="news-picture">
              <img class="picture"src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo_noticia'); ?>">
            </div>
            <p class="news-thumbnail-title"><?php the_sub_field('titulo_noticia'); ?></p>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>
      
      <?php if(get_field('noticias')): $i = 0; ?>
        <?php while(has_sub_field('noticias')): $i++; ?>
      <article id="noticia-<?php echo $i; ?>" class="col-xl-6 col-md-12 news-complete">
        <div class="news-photo">
          <img class="photo img-fluid"src="<?php the_sub_field('imagem'); ?>" alt="">
        </div>
        <div class="news-description">
          <h1 class="title-main"><?php the_sub_field('titulo_noticia'); ?></h1>
          <p class="news-content"> 
          <?php the_sub_field('noticia'); ?>
          </p>
        </div>
      </article>
      <?php endwhile; ?>
        <?php endif; ?>
  </div>
</section>
      
  <section id="empresa" class="anime company container-fluid">
    <div class="row company-details">
      <div class="company-image col-md-5 col-sm-12">
        <img class="image img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/company/company-01.jpg" alt="Imagem do interior da linha de produção da empresa Aerocris">
      </div>

      <div class="company-description col-md-6 col-sm-12">
        <h1 class="company-title"><?php the_field('titulo_empresa'); ?></h1>
        <?php the_field('empresa_info'); ?>

        <div class="certifications">
          <ul>
            <li class="certifications-item"><i class="fa fa-certificate certificate" aria-hidden="true"></i>AS9100</li>
            <li class="certifications-item"><i class="fa fa-certificate certificate" aria-hidden="true"></i>EN9100</li>
          </ul>
          <ul>
            <li class="certifications-item"><i class="fa fa-certificate certificate" aria-hidden="true"></i>JISQ9100</li>
            <li class="certifications-item"><i class="fa fa-certificate certificate" aria-hidden="true"></i>ISO9001</li>
          </ul>
        </div>
        <button type="button" class="btn btn-info"><a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/certificado.pdf"class="btn-certificate" target="_blank">Ver certificações</a></button>
        
      </div>
    </div>
    <div class="row company-info">
      <div class="col-md-3 company-mvv">
        <h2 class="company-subtitle">Missão</h2>
        <p>
        <?php the_field('missao'); ?>
        </p>
      </div>
      <div class="col-md-3 company-mvv">
        <h2 class="company-subtitle">Visão</h2>
        <p>
        <?php the_field('visao'); ?>
        </p>
      </div>
      <div class="col-md-3 company-mvv">
        <h2 class="company-subtitle">Valores</h2>
        <p>
        <?php the_field('valores'); ?>
        </p>
      </div>
    </div>
  </section>

  <section class="info container-fluid">
    <div class="row anime info-row justify-content-center align-items-center">
    <?php if(have_rows('detalhes_sobre_a_empresa')): while(have_rows('detalhes_sobre_a_empresa')) : the_row(); ?>
      <div class="col-md-3">
        <span class="info-number"><?php the_sub_field('numero_detalhe'); ?></span>
        <h2 class="info-title"><?php the_sub_field('descricao_numero'); ?></h2>
      </div>
      <?php endwhile; else : endif; ?> 
    </div>
  </section>

  <section id="produtos" class="products container-fluid">
    <div class="row">
      <div class="col-md-12 products-details">
        <h1 class="products-title anime" ><?php the_field('titulo_produtos_servicos'); ?></h1>
        <p class="products-description anime">
          <?php the_field('descricao_produtos'); ?>
        </p>
        <ul class="nav nav-tabs anime" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Todos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false">Peças</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Ferramental</a>
            </li>
          </ul>
          <div class="tab-content anime" id="myTabContent">
            <div class="tab-pane fade show all active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <?php if(have_rows('imagens_pecas')): while(have_rows('imagens_pecas')) : the_row(); ?>
               <a href="<?php the_sub_field('foto_peca'); ?>"> <img src="<?php the_sub_field('foto_peca'); ?>" alt="<?php the_sub_field('legenda_peca'); ?>" title="<?php the_sub_field('legenda_peca'); ?>" class="img-gallery"/> </a>
            <?php endwhile; else : endif; ?>
            <?php if(have_rows('imagens_ferramental')): while(have_rows('imagens_ferramental')) : the_row(); ?>
              <a href="<?php the_sub_field('imagem_ferramental'); ?>">  <img src="<?php the_sub_field('imagem_ferramental'); ?>" alt="<?php the_sub_field('legenda_ferramenta'); ?>" title="<?php the_sub_field('legenda_ferramenta'); ?>" class="img-gallery"/> </a>
            <?php endwhile; else : endif; ?>   
              </div>
            <div class="tab-pane products fade anime" id="products" role="tabpanel" aria-labelledby="products-tab">
            <?php if(have_rows('imagens_pecas')): while(have_rows('imagens_pecas')) : the_row(); ?>
               <a href="<?php the_sub_field('foto_peca'); ?>"> <img src="<?php the_sub_field('foto_peca'); ?>" alt="<?php the_sub_field('legenda_peca'); ?>" title="<?php the_sub_field('legenda_peca'); ?>" class="img-gallery"/> </a>
            <?php endwhile; else : endif; ?>
            </div>
            <div class="tab-pane services fade anime" id="services" role="tabpanel" aria-labelledby="services-tab">
            <?php if(have_rows('imagens_ferramental')): while(have_rows('imagens_ferramental')) : the_row(); ?>
              <a href="<?php the_sub_field('imagem_ferramental'); ?>">  <img src="<?php the_sub_field('imagem_ferramental'); ?>" alt="<?php the_sub_field('legenda_ferramenta'); ?>" title="<?php the_sub_field('legenda_ferramenta'); ?>" class="img-gallery"/> </a>
            <?php endwhile; else : endif; ?> 
            </div>
          </div>
      </div>
    </div>
  </section>

  <section id="qualidade" class="quality container-fluid">
    <div class="row">
      <div class="col-md-12 quality-details">
        <h1 class="quality-title anime" ><?php the_field('titulo_qualidade'); ?></h1>
        <p class="quality-description anime">
          <?php the_field('descricao_qualidade'); ?>
        </p>
        <div class="quality-section anime">
          <div class="quality-icon">
            <p>Certificações</p>
          </div>
          <div class="quality-icon">
            <p>Atendimento de qualidade</p>
          </div>
          <div class="quality-icon">
            <p>Preços competitivos</p>
          </div>
        </div>         
      </div>
    </div>
  </section>

  <section id="estrutura" class="skeleton container-fluid">
    <h1 class="skeleton-title anime"><?php the_field('titulo_infra_estrutura'); ?></h1>
    <p class="skeleton-title-description anime">Qualquer empresa que possui os requisitos de Qualidade como a Aerocris, se estrutura em 2
     pilares principais: Pessoas, através de suas equipes, e Tecnologia através de seus equipamentos.</p>
    <div class="row skeleton-details">
      <div class="skeleton-image anime col-md-5 col-sm-12">
        <img class="image img-fluid" src="<?php the_field('foto_equipe'); ?>" title="<?php the_field('descricao_da_imagem_equipe'); ?>">
      </div>
      <div class="skeleton-description anime col-md-6 col-sm-12">
        <h1 class="skeleton-subtitle"><?php the_field('titulo_equipe'); ?></h1>
        <?php the_field('descriao_equipe'); ?>
      </div>
    </div>
    <div class="row skeleton-details reverse">
        <div class="skeleton-image anime col-md-5 col-sm-12">
          <img class="image img-fluid" src="<?php the_field('foto_equipamentos'); ?>" title="<?php the_field('descricao_da_imagem_equipamentos'); ?>">
        </div>
        <div class="skeleton-description anime col-md-6 col-sm-12">
          <h1 class="skeleton-subtitle"><?php the_field('titulo_equipamentos'); ?></h1>
          <?php the_field('descricao_equipamentos'); ?>
        </div>
      </div>
  </section>

  <section id="clientes" class="clients container-fluid">
    <div class="row">
      <div class="col-md-12 clients-details">
        <h1 class="clients-title anime" ><?php the_field('titulo_clientes'); ?></h1>
        <p class="clients-description anime">
        <?php the_field('descricao_clientes'); ?>
        </p>
        <div class="clients-section anime">
          <div class="client">
            <h2><?php the_field('cliente_1'); ?></h2>
          </div>
          <div class="client">
          <h2><?php the_field('cliente_2'); ?></h2>
        </div>
        <div class="client">
          <h2><?php the_field('cliente_3'); ?></h2>
        </div>
        <div class="client">
          <h2><?php the_field('cliente_4'); ?></h2>
        </div>
        </div>         
      </div>
    </div>
  </section>

  <section id="contato" class="contact container-fluid">
    <div class="row">
      <div class="col-md-12 form-content">
        <h1 class="contact-title anime"><?php the_field('titulo_contato'); ?></h1>
        <div class="contact-info">
            <form class="col-md-6 col-12 anime">
                <div class="form-group">
                  <label for="name"><b>Nome Completo:</b></label>
                  <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Insira seu nome">
                </div>
  
                <div class="form-group">
                  <label for="email"><b>Email:</b></label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="seuemail@exemplo.com">
                </div>
  
                <div class="form-group">
                  <label for="message"><b>Mensagem:</b> </label>
                  <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
       
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <div class="contact-adress col-md-4 col-12 anime">
              <h2 class="contact-subtitle"><?php the_field('titulo_localizacao'); ?></h2>
              <?php the_field('descricao_localizacao'); ?>
              <h2 class="contact-subtitle"><?php the_field('titulo_formas_de_contato'); ?></h2>
              <p><b>E-mail:&nbsp</b><?php the_field('email'); ?></p>
              <p><b>Telefone:&nbsp</b><?php the_field('telefone'); ?></p>
            </div>
        </div>
          
          <div id="map" class="map anime">
          </div>

      </div>
    </div>

  </section>
  <?php endwhile; else: endif; ?>
  <?php get_footer(); ?>